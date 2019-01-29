<?php
include "class.post.php";
include "class.db.php";
$data = new Post();

switch ($function) {
  case 'sql':
    $db->sql = stripcslashes($data->post['code']);
    // echo $db->sql; die();
    echo($db->json());
    break;
  
  default:
    arr($data->post);
    break;
}