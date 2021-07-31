<?php
    //oop class
    class Oopcrud{
        //oop method
        public function oopCrudpp($data){
           //Database connect
            $db = new mysqli("localhost", "root", "", "oopCrud_php");
            //mysql query
            $sql = "INSERT INTO stuinfo(`stuId`, `stuName`, `stuEmail`, `stuPhone`, `stuDept`) VALUES ('', '$data[stuName]', '$data[stuEmail]', '$data[stuPhone]', '$data[stuDept]')";
            //query exicute
            mysqli_query($db, $sql);
            //query exicute chack
            if(mysqli_query($db, $sql)){
                $message = "Data insert Done";
                return $message;
            }else{
                die('Query Exicute Problem'. mysqli_error($db));
            }
        }
        
    }
?>