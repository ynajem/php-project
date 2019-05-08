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

// class template {
//   public $content;
//   public $view;
//   public $model;
// }

function content($file) {
  global $tmpl;
  extract(get_object_vars($tmpl));
  ob_start();
  require('contents/content.'.$file.'.php');
  $tmpl->content = ob_get_clean();
}

function login(){
  session_start();
  if($_SERVER['REQUEST_URI'] != '/login'){
    $_SESSION['last_url'] = $_SERVER['REQUEST_URI'];
    if(!isset($_SESSION['username'])) redirect("/login");
  }
}

function logout() {
  session_start();
  unset($_SESSION['username']);
  redirect("/");
}