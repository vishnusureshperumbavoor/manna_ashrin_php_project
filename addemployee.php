<?php
  include("connection.php");
  if(isset($_POST['submit']))
  {
    
    $employee_name=$_POST['employee_name'];
    $employee_id=$_POST['employee_id'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $account_no=$_POST['account_no'];
    $ifsc_code=$_POST['ifsc_code'];
    $district=$_POST['district'];
    $state=$_POST['state'];
    $postcode=$_POST['postcode'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $branch=$_POST['branch'];
    $designation=$_POST['designation'];
    $address=$_POST['address'];
    
    $sql="INSERT INTO  `employees_tb`(`employee_name`,`employee_id`,`gender`,`dob`,`account_no`,`ifsc_code`,`district`,`state`,`postcode`,
    `city`,`country`,`branch`,`designation`,`address`) 
    VALUES ('$employee_name','$employee_id','$gender','$dob','$account_no','$ifsc_code','$district','$state','$postcode',
    '$city','$country','$branch','$designation','$address')";
    $result=mysqli_query($conn,$sql);
    echo '<script>
    window.location.href="newemployee.php"
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