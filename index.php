<?php
require "init.php";
// require "login.php";

$route = new Route();

$route->add('/', function() {
  /* Model and View have the default values main,main */
  include "render.php";
});

$route->add('dash', function() {
  $model = "dashboard";
  $view = "dashboard";
  include "render.php";
});

$route->add('add-code', function() {
  $model = "addcode";
  include "render.php";
});

$route->add('login', function() {
  $view = "solid";
  $model = "login";
  include "render.php";
});

$route->add('api', function() {
  include "api.php";
});

$route->add('test/.+', function($name) {
  echo "My Name is $name\n";
});

$route->listen();
