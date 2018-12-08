<?php
if(!isset($view)){
	$view = "main";
}
if(!isset($model)){
	$model = "main";
}
include ROOT."/models/model.{$model}.php";
include ROOT."/views/view.{$view}.php";
