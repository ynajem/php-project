<?php
require "init.php";

$route = new Route();
// login(); /* This Make All Pages Private */

$route->add('/', function() {
  /* Model and View have the default values main,main */
  login();
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

$route->add('run-sql', function() {
  $view = "double-nav";
  $model = "runsql";
  include "render.php";
});

$route->add('login', function() {
  $view = "solid";
  $model = "login";
  include "render.php";
});

$route->add('logout', function() {
  logout();
});

$route->add('api', function() {
  include "api.php";
});

$route->add('post', function() {
  include "class.post.php";
  $data = new Post();
  arr($data->post);
});

$route->add('run/.+', function($function) {
  include "runner.php";
});

$route->add('test/.+', function($name) {
  echo "My Name is $name\n";
});
$route->listen();
