<?php 
function get($field,$default=FALSE)
{
  if(isset($_GET[$field]) and !empty($_GET[$field])) return $_GET[$field];
  return $default;
}

function bs_select(Array $array)
{
  $r = [];
  foreach ($array as $key => $value) {
    $r[] = '<option value="'.$key.'">'.$value.'</option>';
  }
  return '<select class="custom-select">'.join($r,'').'</select>';
}

function redirect($url){
  header("Location: ".$url);
  die();
}

class template {
  public $content;
  public $view;
  public $model;
}

function content($file,$tmpl="raw") {
  ob_start();
  require('contents/content.'.$file.'.php');
  return ob_get_clean();
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