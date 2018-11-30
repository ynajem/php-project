<?php
define('ROOT', dirname(__FILE__));
# Display PHP Errors, Only during production
ini_set('display_errors', '1');

set_include_path(ROOT."/inc");
include("fun.main.php");