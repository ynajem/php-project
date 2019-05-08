<?php
class DB{

  public $sql;
  public $result;
  public $table;
  public $id;
  public $columns = array();

  public function __construct($hostname,$database,$username,$password){
    $dsn = 'mysql:dbname='.$database.';host='.$hostname.';port=3306';
    try {
      $this->db = new PDO($dsn, $username, $password);
    } catch(PDOException $e) {
      die('Could not connect to the database');
    }
    # To display sql statment errors
    # Make active only during Production phase
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    # Set the default fetch mode to associative arrays
    $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // For SQL injection
    $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  }

  private function sql(){
    $db = $this->db;
    $result = $db->query($this->sql) or die("sql error!\n");
    return $result;
  }

  public function array(){
    $result = $this->sql();
    return $result->FetchAll();
  }

  public function list(){
    $r = array();
    $result = $this->sql();
    while($d = $result->Fetch(PDO::FETCH_NUM)){
      $r[] = $d[0];
    }
    return $r;
  }

  public function rowById($id){
    $this->sql = "SELECT * FROM `{$this->table}` WHERE `id`={$id} LIMIT 1";
    return $this->row();
  }

  // return the number of rows for an sql request
  public function count(){
    return $this->sql()->rowCount();
  }

  public function row(){
    return $this->array()[0];
  }

  public function json(){
    $r = json_encode($this->array());
    header('Content-Type: application/json');
    return $r;
  }
  
  public function add(array $values){
    $this->getColumns();
    foreach ($values as $key => $val) {
      if (in_array($key,$this->columns)){
        $fields[] = "`$key` = '$val'";
      }
    }
    $this->sql = "INSERT into `{$this->table}` SET ".implode(',',$fields);
    echo ($this->sql);
    $this->sql();
  }

  // Return all columns of a database table
  public function getColumns(){
    $this->sql = "SELECT COLUMN_NAME FROM	INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '{$this->table}' ";
    $this->columns = $this->list();
  }
}

$db = new DB('localhost','data','root','arena');