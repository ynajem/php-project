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
    
  case 'dump':
    $tmpl->page_title = "Dump Page";
    $tmpl->content = content('list2');
    // $tmpl->content = content('list');
    // $tmpl->content = content('blog-list');
    // $tmpl->content = content('404');
    // $tmpl->content = content('aboutus');
    // $tmpl->content = content('buttons');
    // $tmpl->content = content('rich-editor');
    break;

  case 'add-code':
    $tmpl->page_title = "Add Code";
    $tmpl->page_description = "Add Code Page Description";
    $tmpl->content = content('addcode',$tmpl);
    break;

  case 'login':
    $tmpl->page_title = "Login";
    $tmpl->content = content('login');
}