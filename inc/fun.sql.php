<?php
require_once 'connection.php';

function runsql($sql){
	global $db;
	$result = $db->query($sql) or die("runsql error!\n");
	return $result;
}

function sql($sql,$field=false){
  $r = false;
  $result = runsql($sql);
  if($field){
    while($d = $result->Fetch()) {
      $r[] = $d[$field];
    }
  }
  else $r = $result->FetchAll();
	return $r;
}

// return the number of rows for an sql request
function rowCount($sql){
  return runsql($sql)->rowCount();
}

// Return the maximum value of a field in a table : sqlMax('imdb.id')
function sqlMax($field){
	list($table,$field) = explode('.',$field);
	return sql("SELECT $field as max FROM $table ORDER BY $field DESC LIMIT 1",'max')[0];
}

// Return all the fields of a database table : sqlField('imdb')
function sqlFields($table){
  global $database;
  $sql = "SELECT column_name
          FROM information_schema.columns
          WHERE table_schema = '$database' and table_name = '$table'
        ";
  return sql($sql,'column_name');
}

// ex: sqlDelete('hdmp.imdb',$imdb)
function sqlDelete($field,$value,$mode='one'){
  list($table,$field) = explode('.', $field);
  $limit = ($mode='one') ? "Limit 1" : "";
  sql("DELETE FROM `$table` Where `$field`='$value' $limit");
}

// This function get the data from database and convert it to json
function sql2json($sql){
  $data = sql($sql);
  // $data[0] = array_map('htmlentities', $data[0]);
  $r = json_encode($data);
  header('Content-Type: application/json');
  return $r;
}

function sql2rows($sql,$mode='array'){
  $r = false;
  $result = runsql($sql);
  while($data = $result->Fetch()){
    $r[] = array_values($data);
  }
  if($mode=='json') {
    $r = json_encode($r);
    header('Content-Type: application/json');
  }
  return $r;
}

// Compare an array of values and check id they exist in sql table
// and return the array after filtering
function validFields($sqlTable,$values){
  $fields = sqlFields($sqlTable);
	foreach ($values as $key => $value) {
    if(!in_array($key,$fields)) unset($values[$key]);
	}
  return array_map('addslashes',$values);
}

function addslashes_r($arr){
  return array_map(function($item){
    return addslashes(html_entity_decode($item, ENT_QUOTES,'UTF-8'));
  },$arr);
}

// select('hdmp.ext','mkv','title');
function select($field,$value,$focus=false){
  $value = addslashes($value);
  list($table,$field)=explode('.', $field);
	if($focus){
		$sql = "SELECT $focus FROM $table WHERE $field='$value'";
		$r = sql($sql);
		$r = (count($r)==1) ? $r[$focus] : array_column($r,$focus);
	}
	else {
		$sql = "SELECT * FROM $table WHERE $field='$value'";
		$r = sql($sql);
	}
  return $r;
}

function update($field,$val,$where,$value){ // update('mdvds.imdb',$imdb,'id',$id);
  list($table,$field)=explode('.', $field);
  runsql("UPDATE $table SET  $field='$val' WHERE $where='$value' LIMIT 1");
}

// sqlSearch('hdmp.title','godfather');
function sqlSearch($field,$q){
  $q = addslashes($q);
  list($table,$field) = explode('.', $field);
  $sql = "SELECT * FROM $table
          WHERE $field LIKE '%{$q}%'
          -- or MATCH ($field) AGAINST ('{$q}' IN BOOLEAN MODE)
          ";
  return sql($sql);
}

function arr2table($arr){
  if(!is_array($arr)) return false;
  foreach ($arr as $tr) {
    $r[] = '<tr>';
    foreach ($tr as $td) {
      $r[] = "<td>$td</td>";
    }
    $r[] = '</tr>';
  }
  return implode("\n",$r);
}

// sqlInsert('products',$arr);
function sqlInsert($sqlTable,$input){
  $input = validFields($sqlTable,$input); // Common values
	print_r($input);
  $fields = implode('`,`', array_keys($input));
  $values  = implode("','", array_values($input));
  $sql="INSERT INTO `$sqlTable` (`$fields`) VALUES ('$values')";
	runsql($sql);
}

// sqlInsert_r('products',$arr);
function sqlInsert_r($sqlTable,$inputs){
  $tmp = validFields($sqlTable,$inputs[0]);
  $fields = implode('`,`', array_keys($tmp));

  foreach ($inputs as $input) {
		$input = validFields($sqlTable,$input); // Common values
	  $value  = implode("','", array_values($input));
    $s[] = "('".$value."')";
  }
  $values = implode(',', $s);

  $sql = "INSERT INTO `$sqlTable` (`$fields`) VALUES $values";
  runsql($sql);
}

// sqlUpdate('products.product_id',14,$sets);
function sqlUpdate($field,$value,$sets,$mode='one'){
	if(!is_array($sets)) die('There is no values');

	list($table,$field) = explode('.', $field);

	$sets = validFields($table,$sets);
	foreach ($sets as $key=>$val) $s[] = "`$key`='$val'";
	$set = implode(',', $s);
	$limit = ($mode='one') ? "Limit 1" : "";

	$sql = "UPDATE `$table` SET $set Where `$field`='$value' $limit ;";
	runSql($sql);
}

?>
