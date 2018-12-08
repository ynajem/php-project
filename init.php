<?php
# Display PHP Errors, Only during production
ini_set('display_errors', '1');

define('ROOT', dirname(__FILE__));
define('URI',$_REQUEST['uri']);

require "Router.php";

set_include_path(ROOT."/inc");
include("fun.main.php");