<?php
include_once('../dbConnection.php');
if(isset($_POST['stusignup'])&&isset($_POST['stuname'])&&isset($_POST['stuemail'])&&isset($_POST['stupass'])){
    
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];
    $sql="INSERT INTO student(stu_name, stu_email,stu_pass) VALUES ('stu_name', 'stu_email','stu_pass')";

    if($conn->query($sql) == TRUE){
        echo json_encode("OK");
    } else{
        echo json_encode("Failed");
    }
}
?>