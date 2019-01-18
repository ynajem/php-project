<?php

$tmpl = new template();
$tmpl->topics = ['linux'=>'Linux','python'=>'Python','php'=>'PHP'];
$tmpl->sub_topics = ['network'=>'Network','os'=>'Operating Systems','scripts'=>'Scripts','tweaks'=>'Tweaks'];
$tmpl->model = $model;
$tmpl->view = $view;

switch ($model) {
  
  case 'main':
    $tmpl->page_title = "Home Page";
    $tmpl->page_description = "Put the home page description here";
    $tmpl->content = 
    '
    <main>
      <div class="text-center p-3">
        <h1>Najem starter template</h1>
        <p class="lead">Use this document to quickly start any new project.</p>
      </div>
    </main><!-- container -->
    ';
    break;

  case 'dashboard':
    $tmpl->page_title = "Dashboard";
    $tmpl->description = "Dashboard Description Here";
    $tmpl->content = '<div class="container-fluid"><div class="row">'.content('addcode',$tmpl).'</div></div>';
    break;
    
  case 'addcode':
    $tmpl->page_title = "Add Code";
    $tmpl->page_description = "Add Code Page Description";
    $tmpl->content = '<div class="container"><div class="row">'.content('addcode',$tmpl).'</div></div>';
    break;

  case 'login':
    $tmpl->page_title = "Login";
    $tmpl->content = content('login');
}