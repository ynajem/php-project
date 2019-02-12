<?php
class Render  
{
  public $link;
  public $view;
  public $model;

  public function template(){
    /* include Model and View */
    $model = $this->model;
    $view = $this->view;
    include ROOT."/inc/model.php";
    include ROOT."/views/view.{$view}.php";
  }
}
