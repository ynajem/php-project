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
    $tmpl->content = content('addcode',$tmpl);
    break;

  case 'run-sql':
    $tmpl->model = "run-sql";
    $tmpl->query_types = ['craete'=>'Create','read'=>'Read','update'=>'Update','delete'=>'Delete'];
    $tmpl->content = content('runSQL',$tmpl);
    break;

  case 'contact-us':
    $tmpl->page_title = "Contact Us";
    $tmpl->content = content('contact-us',$tmpl);
    break;
  
  case 'rich-editor':
    $tmpl->page_title = "Contact Us";
    $tmpl->content = content('rich-editor',$tmpl);
    break;

  case 'register':
    $tmpl->page_title = "Register New Account";
    $tmpl->content = content('register',$tmpl);
    break;

  case 'invoice':
    $tmpl->page_title = "Invoice";
    $tmpl->content = content('invoice');
    break;

  case 'profile':
    $tmpl->page_title = "My Profile";
    $tmpl->content = content('profile');
    break;
    
  case 'show-code':
    include "class.db.php";
    $db->table = "snippets";
    $data = $db->rowById($id);
    $tmpl->page_title = $data['title'];
    $tmpl->data = $data;
    $tmpl->content = content('show-code',$tmpl);
    break;

  case 'dump':
    $tmpl->page_title = "Dump Page";
    $tmpl->content = content('dump');
    break;
    

  case 'list1':
    $tmpl->content = content('list1');
    break;

  case 'list2':
    $tmpl->content = content('list2');
    break;

  case 'blog-list':
    $tmpl->content = content('blog-list');
    break;

  case '404':
    $tmpl->content = content('404');
    break;

  case 'about-us':
    $tmpl->content = content('aboutus');
    break;

  case 'buttons':
    $tmpl->content = content('buttons');
    break;

  

  case 'add-code':
    $tmpl->page_title = "Add New Snippet";
    $tmpl->page_description = "Add New Tiny Snippet";
    $tmpl->content = content('addcode',$tmpl);
    break;

  case 'login':
    $tmpl->page_title = "Login";
    $tmpl->content = content('login');
}