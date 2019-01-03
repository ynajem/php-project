<?php
$page_title = "Home Page";
$page_description = "Put the home page description here";

if(URI=='dash'){
  $page_title = "The NANO Dashborad";
  $page_description = "The Nano Dashboard description";
}
if(URI=='add-code'){
  $page_title = 'Add Code';
  $page_description = "Put the add-code page description here";
  $topics = ['linux'=>'Linux','python'=>'Python','php'=>'PHP'];
  $sub_topics = ['network'=>'Network','os'=>'Operating Systems','scripts'=>'Scripts','tweaks'=>'Tweaks'];
}