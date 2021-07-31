<?php
    class Oopcrud{

        public function oopCrudpp($data){
            
            $sql = "INSERT INTO stuinfo(`stuId`, `stuName`, `stuEmail`, `stuPhone`, `stuDept`) VALUES ('', '$data[stuName]', '$data[stuEmail]', '$data[stuPhone]', '$data[stuDept]')";

            mysqli_query($db, $sql);
        }
        
    }
?>