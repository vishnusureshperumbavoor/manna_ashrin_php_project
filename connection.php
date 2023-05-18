<?php
 session_start();
 $servername="localhost";
 $username="root";
 $password="";
 $db_name="db1";
 $conn=new mysqli($servername, $username, $password, $db_name, 3306);
 if($conn->connect_error)
 {
    die("Connection Failed".$conn->connect_error);
 }
//  echo "Connection successful";

?>