<?php
	// Connect to database
	$hostname = 'localhost';
	$username = 'root';
	$password = 'arena';
	$database = 'bobo';

  $dsn = 'mysql:dbname='.$database.';host='.$hostname.';port=3306';

  try {
    $db = new PDO($dsn, $username, $password);
  } catch(PDOException $e) {
    // echo $e;
    die('Could not connect to the database');
  }
  # To display sql statment errors
  # Make active only during Production phase
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  # Set the default fetch mode to associative arrays
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  // For SQL injection
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
