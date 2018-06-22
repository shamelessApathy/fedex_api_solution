<?php

/**
*
* This class controls all access to database and sort incoming data from MageMojo
*
*/
class apiController {
	private function last_entry()
	{
		$host = '127.0.0.1';
		$db   = 'fedex_api';
		$user = 'root';
		$pass = 'Poke8112';
		$charset = 'utf8mb4';

		$options = [
		    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		    PDO::ATTR_EMULATE_PREPARES   => false,
		];
		$pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass, $options);$host = '127.0.0.1';
		$sql = "SELECT MAX(entity_id) AS entity_id FROM sales_flat_order_address";
		$stmt = $pdo->query($sql);
		$last = $stmt->fetch();
		return $last;
	}
	public function view()
	{
		echo "in the view function";
	}
	public function get_last()
	{
		$last = $this->last_entry();
		$last_json = json_encode($last);
		echo $last_json;
	}

}

?>