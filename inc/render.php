<?php
if(!isset($view)){
	$view = "main";
}
if(!isset($model)){
	$model = "main";
}
include ROOT."/inc/model.php";
include ROOT."/views/view.{$view}.php";
