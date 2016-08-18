<?php
class DBClass{
//https://github.com/Enoxh/PHP-Database-Class
//by @ENOXH

function __construct(){
//your db connection must establish $mysqli as connection variable
include_once('db_conn.php');
$this->mysqli = $mysqli;
}

public function selectFromDb($selectors,$table){
    $mysqli = $this->mysqli;
    $sql = "SELECT $selectors FROM $table";
    $result = $mysqli->query($sql);
    if (mysqli_num_rows($result) > 0) {
    return $result;
    }
    else {
    return "0 results";
    }
    }

public function selectFromDbWhere($selectors,$table,$whereField,$where){
    $mysqli = $this->mysqli;
    $sql = "SELECT $selectors FROM `$table` WHERE $whereField = '$where'";
    $result = $mysqli->query($sql);
    if (mysqli_num_rows($result) > 0) {
    return $result;
    }
    else {
    return "0 results";
    }
    }

public function insertIntoDb($selectors,$table,$values,$field,$fieldval){
    $mysqli = $this->mysqli;
    $sql = "INSERT INTO $table ($selectors) VALUES ($values) WHERE $field = $fieldval";
    $result = $mysqli->query($sql);
    if (mysqli_num_rows($result) > 0) {
    return $result;
    }
    else {
    return "0 results";
    }
    }

public function updateDbWhere($selectors,$table,$updatevals,$field,$fieldval){
    $mysqli = $this->mysqli;
    $sql = "UPDATE $table SET $updatevals WHERE $field = $fieldval";
    $result = $mysqli->query($sql);
    if (mysqli_num_rows($result) > 0) {
    return $result;
    }else {
    return "0 results";
    }
    }
public function deleteFromDB($table,$updatevals,$field,$fieldval){
    $mysqli = $this->mysqli;
    $sql = "DELETE FROM $table WHERE $field = $fieldval";
    $result = $mysqli->query($sql);
    if (mysqli_num_rows($result) > 0) {
    return $result;
    }else {
    return "0 results";
    }
    }
}//end class
?>
