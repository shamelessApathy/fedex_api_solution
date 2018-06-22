<?php
class uri_router {
	public function load($uri)
	{
		if (isset($uri) && $uri != null)
		{
			// Remove the "/" pre-pending the URI
			$splode = explode('/',$uri);
			$method = $splode[1];
			if (isset($method)  && $method != "")
			{
				// require api controller
				require('controllers/apiController.php');
				$controller_name = "apiController";
				$apiController = new $controller_name();
				$apiController->$method();
			}
			else
			{
				echo "requires a method be set";
			}
		}
	}
}