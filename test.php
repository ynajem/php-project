<?php
include  "init.php";

$tmpl = new template();
$tmpl->content = "Hello Uness";
// echo "Hello I am Mr Test";
$content = function($tmpl="raw"){
  require "views/view.main.php";
};

$content($tmpl);

