<?php
include "init.php";


spl_autoload_register(function($class){
  require "contents/forms/login.php";
});
class render {
  public $link;

  public function form(){
    // echo $this->title;
    include  "contents/forms/{$this->link}.php";
    // echo $this->footer;
  }
}

$data = new render();
echo "<h1>First Line</h1>";
$data->link = "login";
// $data->footer = "GoodBy";
// $data->link = "/dashboard";
$data->form();
echo "<h1>Last Line</h1>";
$data->link = "login2";
$data->form();
// form('login2');