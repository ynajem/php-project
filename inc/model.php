<?php
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
    content('addcode');
    break;

  case 'run-sql':
    $tmpl->model = "run-sql";
    $tmpl->query_types = ['craete'=>'Create','read'=>'Read','update'=>'Update','delete'=>'Delete'];
    content('runSQL');
    break;

  case 'contact-us':
    $tmpl->page_title = "Contact Us";
    content('contact-us');
    break;
  
  case 'rich-editor':
    $tmpl->page_title = "Contact Us";
    content('rich-editor');
    break;

  case 'register':
    $tmpl->page_title = "Register New Account";
    content('register');
    break;

  case 'invoice':
    $tmpl->page_title = "Invoice";
    content('invoice');
    break;

  case 'profile':
    $tmpl->page_title = "My Profile";
    content('profile');
    break;
    
  case 'show-code':
    include "class.db.php";
    $db->table = "snippets";
    $data = $db->rowById($id);
    $tmpl->data = $data;
    $tmpl->page_title = $data['title'];
    content('show-code');
    break;

  case 'dump':
    $tmpl->page_title = "Dump Page";
    content('dump');
    break;

  case 'list1':
    content('list1');
    break;

  case 'list2':
    content('list2');
    break;

  case 'blog-list':
    content('blog-list');
    break;

  case '404':
    content('404');
    break;

  case 'about-us':
    content('aboutus');
    break;

  case 'buttons':
    content('buttons');
    break;  

  case 'add-code':
    $tmpl->page_title = "Add New Snippet";
    $tmpl->page_description = "Add New Tiny Snippet";
    content('addcode');
    break;

  case 'login':
    $tmpl->page_title = "Login";
    content('login');
    break;
}