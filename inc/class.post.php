<?php
class Post{
  public $post = array();

  public function __construct(){
    $out = array();
    foreach ($_POST as $key => $value) {
      $out[$key] = $this->filter($value);
    }
    $this->post = $out;
  }

  private function filter($data) {
    $data = trim(htmlentities(strip_tags($data)));
    if (get_magic_quotes_gpc()) $data = stripslashes($data);
    $data = preg_replace('~[\x00\x0A\x0D\x1A\x22\x25\x27\x5C\x5F]~u', '\\\$0', $data);
    return $data;
  }
}