<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// include "init.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'GET'){
  $record = get('record');
  switch ($record) {
    case 'topics':
      $data = ['Linux','Python','PHP','Nodejs','ReactNative','AngularJS'];
      echo json_encode(array("topics" => $data));
      break;

    case 'sport':
      $data = file_get_contents(ROOT."/db/sport_channels.json");
      echo json_encode(json_decode($data));

      break;
    
    default:
      echo json_encode(array("message" => "No Data"));
      break;
  }

}