<?php

include "init.php";
include_once 'Router.php';

$router = new Router(new Request);

$router->get('/', function() {
  $page_title = "Najem Starter Template";
  $page_description = "Put the page description here";
  $view = "main";
  include "layout.php";
});


$router->get('/dash', function($request) {
  $page_title = "Najem Dashboard";
  $page_description = "Description Here";
  $view = "dashboard";
  include "layout.php";
});

$router->post('/data', function($request) {
  return var_dump($request->getBody()); # Array
  return json_encode($request->getBody()); # json
});
