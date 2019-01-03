<?php
require "init.php";

$route = new Route();

$route->add('/', function() {
  include "render.php";
});

$route->add('dash|dashboard', function() {
  $view = "dashboard";
  include "render.php";
});

$route->add('api', function() {
  // $view = "dashboard";
  include "api.php";
});

$route->add('add-code', function() {
  $view = "addcode";
  include "render.php";
});


$route->add('test/.+', function($name) {
  echo "My Name is $name\n";
});

$route->listen();
