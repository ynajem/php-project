<?php
require "init.php";
require "config.php";

$route = new Route();

$route->add('/', function() {
  login();

  $view = "main";
  $content = content("blank");
  $page_title = title('home');
  $page_description ="Home Page Desciption";
  include "render.php";
 
});

$view = "double-nav";
$route->add('/(register|run-sql|add-code|profile|contact-us|dump|invoice|rich-editor|list1|list2|blog-list|404|about-us|buttons)', function() {
  $page_title = title(URI);
  $page_description = "PHP Project Description";
  $query_types = ['craete'=>'Create','read'=>'Read','update'=>'Update','delete'=>'Delete'];
  $topics = ['linux'=>'Linux','python'=>'Python','php'=>'PHP'];
  $sub_topics = ['network'=>'Network','os'=>'Operating Systems','scripts'=>'Scripts','tweaks'=>'Tweaks'];
  $content = content(URI,get_defined_vars());
  include "render.php";
});

$route->add('login', function() {
  $view = "solid";
  $content = content("login");
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

$route->add('code/.+', function($id) {
  global $tmpl;
  include "class.db.php";
  $db->table = "snippets";
  $data = $db->rowById($id);
  $tmpl->data = $data;
  $tmpl->page_title = $data['title'];
  $content = content("show-code",$tmpl);
  include "render.php";
});

$route->add('run/.+', function($function) {
  include "runner.php";
});

$route->add('test/.+', function($name) {
  echo "My Name is $name\n";
});

$route->add('/.+', function($url) {
  $content = content("404");
  include "render.php";
});

$route->listen();
