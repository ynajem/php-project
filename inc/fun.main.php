<?php 
function view($view_name){
    // global $page_title;
    include("views/view.{$view_name}.php");
}