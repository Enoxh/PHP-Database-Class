<?php
class DBClass{
//https://github.com/Enoxh/PHP-Database-Class
//by @ENOXH

function __construct(){
//your db connection must establish $mysqli as connection variable
include_once('db_conn.php');
$this->mysqli = $mysqli;
}

        /*SELECT*/
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



        /*INSERT*/            
        public function insertIntoDb($selectors,$table,$values){
        $mysqli = $this->mysqli;
        $sql = "INSERT INTO $table ($selectors) VALUES ($values)";
        $result = $mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
        return $result;
        }
        else {
        return "0 results";
        }
        }}


        /*UPDATE*/
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



        /*DELETE*/
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



        /*
        Usage: $result = $crud->selectFromDbJoinOn('test','profiles','test.id=profiles.id','*');
        */ 
        public function selectFromDbJoinOn($table1,$table2,$equals,$selectors ){
        $mysqli = $this->mysqli;
        $sql = "
        SELECT $selectors
        FROM $table1
        INNER JOIN $table2
        ON $equals 
        ";
        $result = $mysqli->query($sql);
        if (mysqli_num_rows($result) > 0) {
        return $result;
        }
        else {
        return "0 results";
        }
        }   
}//end class
?>
