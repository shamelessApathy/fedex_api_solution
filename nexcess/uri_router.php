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
				echo "method set <br />";
				var_dump($method);

				// require api controller
				require('controllers/apiController.php');
				echo "<br /> after require";
				$controller_name = "apiController";
				$apiController = new $controller_name();
				$apiController->$method();
			}
		}
	}
}