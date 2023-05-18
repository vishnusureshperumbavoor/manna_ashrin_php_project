<?php
include 'connection.php';

?>
<!DOCTYPE html>

<html lang="en">

<head>
<script type="text/javascript">
		function preventBack(){window.history.forward()};
		setTimeout("preventBack()",0);
		window.onunload=function(){null;}
   </script>
<!-- Required meta tags -->

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Infinio Technology Solutions</title>

<!-- plugins:css -->

<link rel="stylesheet" href="./vendors/simple-line-icons/css/simple-line-icons.css">

<link rel="stylesheet" href="./vendors/flag-icon-css/css/flag-icon.min.css">

<link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">

<!-- endinject -->

<!-- Plugin css for this page -->

<!-- End plugin css for this page -->

<!-- inject:css -->

<!-- endinject -->

<!-- Layout styles -->

<link rel="stylesheet" href="./css/style.css"/>

<link rel="shortcut icon" href="./images/favicon.png" />

</head>

<body>

<div class="container-scroller">

<div class="container-fluid page-body-wrapper full-page-wrapper">

 <div class="content-wrapper d-flex align-items-center auth">

 <div class="row flex-grow">

 <div class="col-lg-4 mx-auto">

 <div class="auth-form-light text-left p-5">

  <div class="brand-logo">

 <img src="./images/logo.svg">

  </div>

  <h4>Hello! let's change your password</h4>

 

  <form class="pt-3" method="post" action="changepw.php">

 <div class="form-group">

 <input type="password" name="password_name" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Current Password">

 </div>

 <div class="form-group">

<input type="password" name="password1" class="form-control form-control-lg" id="exampleInputPassword2" placeholder="New Password">

</div>

 <div class="form-group">

 <input type="password" name="confirm_password" class="form-control form-control-lg" id="exampleInputPassword2" placeholder="Confirm Password">

 </div>

 <div class="mt-3">

 <!-- <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" value="Submit">-->
 <button type="submit" class="btn btn-primary mr-2"  name="submit" value="Submit">Submit</button> 
 <button class="btn btn-light" href="" name="cancel">Cancel</button>
 </div>

 <div class="my-2 d-flex justify-content-between align-items-center">

 
 </div>






  </form>

 </div>

 </div>

 </div>

 </div>

 <!-- content-wrapper ends -->

</div>

<!-- page-body-wrapper ends -->

</div>

<!-- container-scroller -->

<!-- plugins:js -->

<script src="./vendors/js/vendor.bundle.base.js"></script>

<!-- endinject -->

<!-- Plugin js for this page -->

<!-- End plugin js for this page -->

<!-- inject:js -->

<script src="./js/off-canvas.js"></script>

<script src="./js/misc.js"></script>

<!-- endinject -->

</body>

</html>