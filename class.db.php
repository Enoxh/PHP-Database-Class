<?php
class DBClass{


function __construct(){

include_once('db_conn.php');

$this->mysqli = $mysqli;	
}


public function selectFromDb($selectors,$table){
	
	$sql = "SELECT $selectors FROM $table";
	$result = mysqli_query($this->mysqli, $sql);

	if (mysqli_num_rows($result) > 0) {
	return $result;
	}
	} else {
	return "0 results";
	}	
	
}


public function selectFromDbWhere($selectors,$table,$whereField,$where){
	
	$sql = "SELECT $selectors FROM $table WHERE $whereField = $where";
	$result = mysqli_query($this->mysqli, $sql);

	if (mysqli_num_rows($result) > 0) {
	return $result;
	}
	} else {
	return "0 results";
	}	
	
}


public function insertIntoDb($selectors,$table,$values,$field,$fieldval){
	
	$sql = "INSERT INTO $table ($selectors) VALUES ($values) WHERE $field = $fieldval";
	$result = mysqli_query($this->mysqli, $sql);

	if (mysqli_num_rows($result) > 0) {
	return $result;
	}
	} else {
	return "0 results";
	}	
	
}

public function updateDbWhere($selectors,$table,$updatevals,$field,$fieldval){
	
	$sql = "UPDATE $table SET $updatevals WHERE $field = $fieldval";
	$result = mysqli_query($this->mysqli, $sql);

	if (mysqli_num_rows($result) > 0) {
	return $result;
	}
	} else {
	return "0 results";
	}	
	
}

public function deleteFromDB($table,$updatevals,$field,$fieldval){
	
	$sql = "DELETE FROM $table WHERE $field = $fieldval";
	$result = mysqli_query($this->mysqli, $sql);

	if (mysqli_num_rows($result) > 0) {
	return $result;
	}
	} else {
	return "0 results";
	}	
	
}



}
?>