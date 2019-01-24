<?php
/* Default View and Model */
$view = $view ?? "main";
$model = $model ?? 'main';

/* Default template values */
$tmpl = new template();
$tmpl->topics = ['linux'=>'Linux','python'=>'Python','php'=>'PHP'];
$tmpl->sub_topics = ['network'=>'Network','os'=>'Operating Systems','scripts'=>'Scripts','tweaks'=>'Tweaks'];
$tmpl->model = $model;
$tmpl->view = $view;

/* include Model and View */
include ROOT."/inc/model.php";
include ROOT."/views/view.{$view}.php";