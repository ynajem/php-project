<?php
class Post{
  public $post = array();
  public $postkeys = array();
  public $optional = array();
  public $required = array();

  public function __construct(){
    $out = array();
    foreach ($_POST as $key => $value) {
      if(!empty($value)){
        $out[$key] = $this->filter($value);
        $this->postkeys[] = $key;
      }
    }
    $this->post = $out;
  }
  public function is_valid(){
    foreach ($this->required as $item) {
      if(!in_array($item,$this->postkeys)){
        return FALSE;
      }
    }
    return TRUE;
  }

  private function filter($data) {
    $data = trim(htmlentities(strip_tags($data)));
    if (get_magic_quotes_gpc()) $data = stripslashes($data);
    $data = preg_replace('~[\x00\x0A\x0D\x1A\x22\x25\x27\x5C\x5F]~u', '\\\$0', $data);
    return $data;
  }
}