<?php
include "init.php";

ob_start();
session_start();

if (!empty($_POST['username']) && !empty($_POST['password'])) {
  if ($_POST['username'] == 'najem' && $_POST['password'] == 'demo') {
    $_SESSION['valid'] = TRUE;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = 'najem';
    $url = $_SESSION['last_url'];
    redirect($url);
  }
  else {
    redirect("/login");
  }
}