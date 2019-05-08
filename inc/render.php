<?php
/* Default View and Model */
$view = $view ?? "main";
$model = $model ?? 'main';

global $tmpl;
if (!isset($tmpl)) $tmpl = new stdClass();

/* Default template values */
$tmpl->page_title = "PHP Project";
$tmpl->topics = ['linux'=>'Linux','python'=>'Python','php'=>'PHP'];
$tmpl->sub_topics = ['network'=>'Network','os'=>'Operating Systems','scripts'=>'Scripts','tweaks'=>'Tweaks'];
$tmpl->model = $model;
$tmpl->view = $view;

/* Include Model and View */
include ROOT."/inc/model.php";
include ROOT."/views/view.{$view}.php";