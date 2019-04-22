<?php
include ("class.db.php");
switch ($field) {
  case 'add-code':
    echo "<h1>This is the Add Code Post Page</h1>";
    echo URI;
    $data->required = ['title','language','topic','description'];
    if($data->is_valid()){
      $data->post['user_id'] = 113;
      arr($data->post);
      $db->table = 'snippets';
      $db->add($data->post);
    }
    else{
      $db->table = 'snippets';
      $db->getColumns();
      arr($db->columns);
      arr($data->post);
      echo "Please, fill out all the required fields: ";
      echo implode(", ",$data->required);
    }
    break;
  
  default:
    echo "<h1>This the default Post Page</h1>";
    echo "<h2>This page has no post data</h2>";
    break;
}

