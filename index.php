<?php

include "init.php";
include "Router.php";

$route = new Route();

$route->add('/', function() {
  $page_title = "Najem Starter Template";
  $page_description = "Put the page description here";
  $view = "main";
  include "layout.php";
});

$route->add('/dash', function() {
  $page_title = "Najem Dashboard";
  $page_description = "Description Here";
  $view = "dashboard";
  include "layout.php";
});

$route->add('/name/.+/.+', function($name,$mail) {
  echo "Name: $name<br>Email: $mail";
});

$route->listen();
