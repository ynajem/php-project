<?php

class Route
{
	// List of URI's to match against
  private $urls = array();

	// List of closures to call
	private $functions = array();

  // Adds a URI and Function to the two lists
	public function add($uri, $function)
	{
		$uri = trim($uri, '/\^$');
		$this->urls[] = $uri;
		$this->functions[] = $function;
	}

	// Looks for a match for the URI and runs the related function
	public function listen()
	{
		$uri = $_REQUEST['uri'] ?? '';
		$uri = trim($uri, '/\^$');
		$replacementValues = array();

		// List through the stored URI's
		foreach ($this->urls as $step => $url)
		{
			// See if there is a match
			if (preg_match("#^$url$#", $uri))
			{
				// Replace the values
				$realUri = explode('/', $uri);
				$fakeUri = explode('/', $url);

				// Gather the .+ values with the real values in the URI
				foreach ($fakeUri as $key => $value) {
					if ($value == '.+')	$replacementValues[] = $realUri[$key];
				}

				// Pass an array for arguments
				call_user_func_array($this->functions[$step], $replacementValues);
				exit;
			}

		} // End of Loop

	} // end of Listen

}