<?php
# Display PHP Errors, Only during production
ini_set('display_errors', '1');

// define('ROOT', dirname(__FILE__));
define('ROOT', __DIR__);


if(isset($_REQUEST['uri']))
 define('URI',$_REQUEST['uri']);
else define('URI','main');
require "Router.php";

set_include_path(ROOT."/inc");
include("fun.main.php");
// include("class.db.php");
// include("fun.sql.php");