<?php
require "init.php";

$route = new Route();
// login(); /* This Make All Pages Private */


$route->add('/', function() {
  /* Model and View have the default values main,main */
  login();
  $view = "double-nav";
  include "render.php";
});

$route->add('/(register|run-sql|add-code|profile|contact-us|dump|invoice|rich-editor|list1|list2|blog-list|404|about-us|buttons)', function() {
  $view = "double-nav";
  $model = URI;
  include "render.php";
});

$route->add('dashboard', function() {
  $model = "dashboard";
  $view = "dashboard";
  include "render.php";
});

$route->add('render', function() {
  include "class.render.php";
  $page = new Render();
  $tmpl = new template();
  $page->model = "main";
  $page->view = "main";
  $page->template();
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

$route->add('post/.+', function($field) {
  include "class.post.php";
  $data = new Post();
  include "post.php";
});

$route->add('run/.+', function($function) {
  include "runner.php";
});

$route->add('test/.+', function($name) {
  echo "My Name is $name\n";
});

$route->add('/.+', function($url) {
  $view = "double-nav";
  $model = "404";
  include "render.php";
});

$route->listen();
