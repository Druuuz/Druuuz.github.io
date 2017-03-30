<?php 
	$mysqli = false;

	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli("localhost","root","","Pink");
		$mysqli->query("SET NAMES 'utf8'");
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}

	function getNews ($limit, $id) {
		global $mysqli;
		connectDB();
		if($id) 
			$where ="WHERE `id` = ".$id;
		$result = $mysqli->query("SELECT * FROM `News`$where ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		if(!$id)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}

	function resultToArray ($result){
		$array = array ();
		while (($row = $result->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
 ?>