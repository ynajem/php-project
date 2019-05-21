<?php
include ("class.db.php");
switch ($field) {
  case 'add-code':
    $url = "/add-code";
    $data->required = ['title','language','topic','description'];
    if($data->is_valid()){
      $data->post['user_id'] = 113;
      // arr($data->post);
      $db->table = 'snippets';
      $last_id = $db->add($data->post);
      redirect("/code/{$last_id}");
    }
    else{
      $msg = "Please fill out all the required fields.";
      send_alert($msg,$url);
    }
    break;
  
  default:
    echo "<h1>This the default Post Page</h1>";
    echo "<h2>This page has no post data</h2>";
    break;
}

