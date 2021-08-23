<?php
    class StudentInfo{  //oop class.
        //database connection make global using __construct function.
        protected $db;  //make global veriable
        public function __construct(){
            //Database connect
            $this->db = new mysqli("localhost", "root", "", "oopCrud_php");
        }
        public function studentInsert($data){   //oop method
            //mysql query
            $sql = "INSERT INTO stuinfo(`stuId`, `stuName`, `stuEmail`, `stuPhone`, `stuDept`) VALUES ('', '$data[stuName]', '$data[stuEmail]', '$data[stuPhone]', '$data[stuDept]')";

            //query exicute
            // mysqli_query($db, $sql);

            if(mysqli_query($this->db, $sql)){  //query exicute chack
                $message = "Data insert Done";
                return $message;
            }else{
                die('Query Exicute Problem'. mysqli_error($this->db));
            }
        } 
        //This method for data read
        public function studentSelect(){
            $sql = "SELECT * FROM stuinfo";
            if(mysqli_query($this->db, $sql)){
                $query_result = mysqli_query($this->db, $sql);
                return $query_result;
            }else{
                die('Query execute problem'.mysqli_error($this->db));
            }
        }

        public function select_student_by_id($student_id){ //This function for data read for data update by edit_student page
          $sql = "SELECT * FROM stuinfo WHERE stuid = '$student_id'";
          if(mysqli_query($this->db,$sql)){
              $query_result = mysqli_query($this->db,$sql);
              return $query_result;
          }else{
            die('Query execute problem' . mysqli_error($this->db));
          }
        }

        public function update_student_information($data){ //This method for data update by edit_student page
            $sql = "UPDATE stuinfo SET stuName='$data[stuName]', stuEmail='$data[stuEmail]', stuPhone='$data[stuPhone]', stuDept='$data[stuDept]' WHERE stuId = $data[stuId]";
            if(mysqli_query($this->db,$sql)){
                header('Location:read.php'); // header function make page redairect
                exit();
            }else{
                die('Query execute problem'.mysqli_error($this->db));
            }
        }
    }
