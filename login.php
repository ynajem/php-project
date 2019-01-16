<?php
ob_start();
session_start();
$msg = '';
echo "Login Page";
if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  if ($_POST['username'] == 'najem' && $_POST['password'] == 'demo') {
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = 'najem';
    echo 'You have entered valid use name and password';
  }else {
    echo 'Wrong username or password';
  }
}