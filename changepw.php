<?php
  include("connection.php");

  if(isset($_POST['submit'])) 
  {
    $password_name = $_POST['password_name'];
    $confirm_password = $_POST['confirm_password'];
    $password1 = $_POST['password1'];

    if ($password1==$confirm_password)
      {
        
      $sql = "UPDATE `login` SET `password`='$confirm_password' WHERE `password`='$password_name'";
      $result = mysqli_query($conn, $sql);
      
      echo '<script>
      window.location.href="log2.php";
      alert("Password Changed Successfully");
      </script>';
      }
      else
    {
      echo '<script>
     window.location.href="changepassword.php";
      alert("Password does not match");
      </script>';
    }

  }
  if(isset($_POST['cancel'])) 
  {
    echo '<script>
     window.location.href="changepassword.php";
      </script>';
  }
     
      
  
  

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
  
?>