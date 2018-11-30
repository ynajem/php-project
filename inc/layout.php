<?php
if(!isset($view)){
    $view = "main";
}
include ROOT."/views/view.{$view}.php";