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

class template {
  public $pageTitle;
  public $description;
  public $content;
  public $view;
  public $model;
}

function content($file,$tmpl="raw") {
  ob_start();
  require('contents/content.'.$file.'.php');
  return ob_get_clean();
}