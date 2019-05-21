<?php 
function get($field,$default=FALSE)
{
  if(isset($_GET[$field]) and !empty($_GET[$field])) return $_GET[$field];
  return $default;
}

function arr(Array $array){
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}

function options(Array $array){
  $r = array();
  foreach ($array as $key => $value) {
    $r[] = '<option value="'.$key.'">'.$value.'</option>';
  }
  return join($r,'');
}

function redirect($url){
  header("Location: ".$url);
  die();
}

function feedback($url,$msg){
  redirect($url);
  echo $url . "<br>" . $msg;
}

function send_alert($alert,$url,$type="danger"){
  $_SESSION['ALERT'] = $alert;
  $_SESSION['ALERT_TYPE'] = $type;
  session_write_close();
  redirect($url);
}

function read_alert(){
  if(isset($_SESSION['ALERT'])){
    $alert = $_SESSION['ALERT'];
    $type = $_SESSION['ALERT_TYPE'];
    unset($_SESSION['ALERT'],$_SESSION['ALERT_TYPE']);
    $tag = '<div class="alert alert-'.$type.'" role="alert">'.$alert.'</div>';
  }
  else $tag = '';
  return $tag;
}


// class template {
//   public $content;
//   public $view;
//   public $model;
// }

function content($file,$data=FALSE) {
  // global $data;
  if($data) extract($data);
  ob_start();
  require('contents/content.'.$file.'.php');
  return ob_get_clean();
}

function title($page){
  global $title;
  global $default_title;
  return (isset($title[$page]))?$title[$page]:$default_title;
}

function login(){
  // session_start();
  if($_SERVER['REQUEST_URI'] != '/login'){
    $_SESSION['last_url'] = $_SERVER['REQUEST_URI'];
    if(!isset($_SESSION['username'])) redirect("/login");
  }
}

function logout() {
  // session_start();
  unset($_SESSION['username']);
  redirect("/");
}