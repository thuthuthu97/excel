<?php
include('./config.php');
class db{
	public static $connection;

	public function __construct(){
		if(!self::$connection){
			self::$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		}
		return self::$connection;
	}

	public function query($sql){
		$data = mysqli_query(self::$connection, $sql);
		return $data;
	}

	public function select($sql){
		$data = $this->query($sql);
		$arr = array();
		while ($row = mysqli_fetch_assoc($data)) {
			$arr[] = $row;
		}
		return $arr;
	}
}