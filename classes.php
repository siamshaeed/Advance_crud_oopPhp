<?php
class StudentInfo{  //oop class.
    //database connection make global using __construct function.
    protected $db;  //make global veriable
    public function __construct(){
        //Database connect
        $this->db = new mysqli("localhost", "root", "", "oopCrud_php");
    }

    //this method for data insert
    public function studentInsert($data){
        //mysql query
        $sql = "INSERT INTO stuinfo(`stuId`, `stuName`, `stuEmail`, `stuPhone`, `stuDept`) VALUES ('', '$data[stuName]', '$data[stuEmail]', '$data[stuPhone]', '$data[stuDept]')";

        if (mysqli_query($this->db, $sql)) {  //query exicute
            $message = "Data insert successfully";
            return $message;
        } else {
            die('Query exicute problem' . mysqli_error($this->db));
        }
    }

    //This method for data read
    public function studentSelect(){
        $sql = "SELECT * FROM stuinfo"; //mySql query for show all data of table
        if (mysqli_query($this->db, $sql)) {
            $query_result = mysqli_query($this->db, $sql);
            return $query_result;
        } else {
            die('Query execute problem' . mysqli_error($this->db));
        }
    }
    // select student by id for edit data
    public function select_student_by_id($student_id){ //This method for data edit on edit_student.php page
        $sql = "SELECT * FROM stuinfo WHERE stuid = '$student_id'";
        if (mysqli_query($this->db, $sql)) {
            $query_result = mysqli_query($this->db, $sql);
            return $query_result;
        } else {
            die('Query execute problem' . mysqli_error($this->db));
        }
    }

    //This method for data update by edit_student page
    public function update_student_information($data){ 
        $sql = "UPDATE stuinfo SET stuName='$data[stuName]', stuEmail='$data[stuEmail]', stuPhone='$data[stuPhone]', stuDept='$data[stuDept]' WHERE stuId = $data[stuId]";
        if (mysqli_query($this->db, $sql)) {
            session_start();     //This function for session start
            $_SESSION['message'] = "Student Info Update Successfully !";
            header('Location:read.php'); // header function for page redairect
            exit();
        } else {
            die('Query execute problem' . mysqli_error($this->db));
        }
    }
    
    // this method for data delete
    public function delete_student_byId($id){
        $sql = "DELETE FROM stuinfo WHERE stuid = '$id' ";

        if (mysqli_query($this->db, $sql)) {
            session_start();
            $_SESSION['message'] = "Student Info delete successfully";
        }
    }
}
