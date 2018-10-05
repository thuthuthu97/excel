<?php
include ('./db.php');
class users extends db{
	public function getUser(){
		$sql = 'SELECT * FROM users';
		$users = $this->select($sql);
		return $users;
	}

	public function findKey($keyword){
		if($keyword){
			$sql = 'SELECT * FROM users WHERE username LIKE "%'.$keyword.'%"';
		}
		else{
			$sql = 'SELECT * FROM users';
		}
		$users = $this->select($sql);
		return $users;
	}

	public function deleteUser($id){
		$sql = 'DELETE * FROM users WHERE id ='.$id;
		$this->select($sql);
	}
}