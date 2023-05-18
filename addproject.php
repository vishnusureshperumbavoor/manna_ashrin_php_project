<?php
  include("connection.php");
  if(isset($_POST['submit']))
  {
    
    $project_id=$_POST['project_id'];
    $project_name=$_POST['project_name'];
    $client_name=$_POST['client_name'];
    $amount=$_POST['amount'];
    $starting_date=$_POST['starting_date'];
    $deadline=$_POST['deadline'];
    $employee_name=$_POST['employee_name'];
   
    $sql="INSERT INTO  `projects_tb`(`project_id`,`project_name`,`client_name`,`amount`,`starting_date`,`deadline`,`employee_name`) VALUES ('$project_id','$project_name','$client_name','$amount','$starting_date','$deadline','$employee_name')";
    $result=mysqli_query($conn,$sql);
    echo '<script>
    window.location.href="newproject.php"
    alert("Inserted Successfully")
    
     </script>';
    // $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    // $count=mysqli_num_rows($result);
    // if($count==1)
    // {
    //     header("Location:index.php");
    // }
    // else
    // {
     
    //   echo '<script>
    //   window.location.href="log2.php"
    //    alert("Login Failed due to invalid username or password")
    //    </script>';
      
    // }
  } 
?>