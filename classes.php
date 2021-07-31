<?php
    //oop class (student insert).
    class StudentInfo{
        //database connection make global using __construct function.
        protected $db; //make global veriable
        public function __construct(){
            //Database connect
            $this->db = new mysqli("localhost", "root", "", "oopCrud_php");
        }
        //oop method
        public function studentInsert($data){
            //mysql query
            $sql = "INSERT INTO stuinfo(`stuId`, `stuName`, `stuEmail`, `stuPhone`, `stuDept`) VALUES ('', '$data[stuName]', '$data[stuEmail]', '$data[stuPhone]', '$data[stuDept]')";

            //query exicute
            // mysqli_query($db, $sql);

            //query exicute chack
            if(mysqli_query($this->db, $sql)){
                $message = "Data insert Done";
                return $message;
            }else{
                die('Query Exicute Problem'. mysqli_error($this->db));
            }
        } 
    }
?>