<?php
require "init.php";

$route = new Route();
// global $tmpl;
$tmpl = new stdClass();
// login(); /* This Make All Pages Private */


$route->add('/', function() {
  /* Model and View have the default values main,main */
  login();
  $view = "double-nav";
  $content = content("blank");
  include "render.php";
});

$route->add('/(register|run-sql|add-code|profile|contact-us|dump|invoice|rich-editor|list1|list2|blog-list|404|about-us|buttons)', function() {
  $view = "double-nav";
  global $tmpl;
  $tmpl->query_types = ['craete'=>'Create','read'=>'Read','update'=>'Update','delete'=>'Delete'];
  $tmpl->page_title = "PHP Project";
  $tmpl->topics = ['linux'=>'Linux','python'=>'Python','php'=>'PHP'];
  $tmpl->sub_topics = ['network'=>'Network','os'=>'Operating Systems','scripts'=>'Scripts','tweaks'=>'Tweaks'];
  $content = content(URI,$tmpl);
  include "render.php";
});

$route->add('dashboard', function() {
  // $model = "dashboard";
  $view = "dashboard";
  global $tmpl;
  $tmpl->page_title = "Dashboard";
  $tmpl->sub_topics = ['network'=>'Network','os'=>'Operating Systems','scripts'=>'Scripts','tweaks'=>'Tweaks'];
  $tmpl->topics = ['linux'=>'Linux','python'=>'Python','php'=>'PHP'];
  $content = content('add-code',$tmpl);
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
  $view = "double-nav";
  include "render.php";
});

$route->add('run/.+', function($function) {
  include "runner.php";
});

$route->add('test/.+', function($name) {
  echo "My Name is $name\n";
});

$route->add('/.+', function($url) {
  $view = "double-nav";
  $content = content("404");
  include "render.php";
});

$route->listen();
