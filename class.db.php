<?php
class DBClass {
    
    private $mysqli;

    function __construct(){

    require_once('db_conn.php');    
    $this->mysqli = $mysqli;    
    }

      //DB CLASS  

        /*SELECT*/
            public function selectFromDb($selectors,$table){
            $mysqli = $this->mysqli;
            $sql = "SELECT $selectors FROM $table";
            $result = $mysqli->query($sql);
            return $result;
            }
            /*INSERT*/            
            public function insertIntoDb($selectors,$table,$values){
            $mysqli = $this->mysqli;
            $sql = "INSERT INTO $table ($selectors) VALUES ($values)";
            $result = $mysqli->query($sql);
            return $result;
            }
            /*UPDATE*/
            public function updateDbWhere($selectors,$table,$updatevals,$field,$fieldval){
            $mysqli = $this->mysqli;
            $sql = "UPDATE $table SET $updatevals WHERE $field = $fieldval";
            $result = $mysqli->query($sql);
            return $result;
            }
            /*DELETE*/
            public function deleteFromDB($table,$field,$fieldval){
            $mysqli = $this->mysqli;
            $sql = "DELETE FROM $table WHERE $field = $fieldval";
            $result = $mysqli->query($sql);
            return $result;
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
            return $result;
            }

            /*SELECT SINGLE ITEM*/
            public function selectSingleFromDb($selectors,$table,$field,$fieldval){
            $mysqli = $this->mysqli;
            $result  = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT $selectors FROM $table WHERE $field = '$fieldval'"));
            return  $result ;
            //usage    
            //$userID = $result['userID'];
            }     
            
            /*Get Column Names*/
            public function showColumns($table){
            $mysqli = $this->mysqli;
            $arr = array();    
            $sql = "SHOW COLUMNS FROM $table ";
            $res = $mysqli->query($sql);
            while($row = $res->fetch_assoc()){
                $columns[] = $row['Field'];
            }
            return $columns;
            }

    } 
?>
