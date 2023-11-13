<?php
$db_host="localhost";
$db_user="root";
$db_pass= "";
$db_name= "newlms_db";

//create connection
$conn=new mysqli($db_host, $db_user, $db_pass, $db_name);
//check connection
if ($conn->connect_error) {
    die("connection failed");
}
//else{
    //echo"connected";
//}
?>