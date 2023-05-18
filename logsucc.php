<?php
  include("connection.php");
  session_start();
  if(isset($_POST['submit']))
  {
  
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="SELECT * FROM `login` WHERE username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if($count==1)
    {
      if($count==1)
      {
          $_SESSION['username']=$username;
          header("Location:index.php");
      }
    }
    
 }






    
  //   else
  //   {
     
  //     echo '<script>
  //     window.location.href="log2.php"
  //      alert("Login Failed due to invalid username or password")
  //      </script>';
      
  //   }
  //   if(isset($_GET['logout'])) 
  //   {
  //     session_start();
  //     session_destroy();
  //     unset($_SESSION["username"]);
  //     unset($_SESSION["password"]);
      
  //     header('Location: index.php');
  //     exit;
  //     }
  // } 
?>