<?php
  include("connection.php");
  if(isset($_POST['submit']))
  {
    
    $ID=$_POST['ID'];
    $name=$_POST['name'];
    $email_id=$_POST['email_id'];
    $phone_no=$_POST['phone_no'];
    $address=$_POST['address'];
   
    $sql="INSERT INTO  `clients_tb`(`ID`,`name`,`email_id`,`phone_no`,`address`) VALUES ('$ID','$name','$email_id','$phone_no','$address')";
    $result=mysqli_query($conn,$sql);
    // echo '<script>
    // window.location.href="newclient.php"
    // alert("Inserted Successfully")
    
    //  </script>';
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