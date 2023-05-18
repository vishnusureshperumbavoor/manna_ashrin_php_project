<?php

include("connection.php");

?>
<!DOCTYPE html>

<html lang="en">

 <head>
 <script type="text/javascript">
 window.history.forward();
</script>

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

  <link rel="stylesheet" href="     ./vendors/simple-line-icons/css/simple-line-icons.css">

  <link rel="stylesheet" href="     ./vendors/flag-icon-css/css/flag-icon.min.css">

  <link rel="stylesheet" href="     ./vendors/css/vendor.bundle.base.css">

  <!-- endinject -->

  <!-- Plugin css for this page -->

  <!-- End plugin css for this page -->

  <!-- inject:css -->

  <!-- endinject -->

  <!-- Layout styles -->

  <link rel="stylesheet" href="./css/style.css"/>

  <link rel="shortcut icon" href="./images/favicon.png" />
  <script>
      function disableButton(){
        history.pushState(null,null,window.location.href);
      
      }
      window.onload=function(){
        disableBackButton();
        window.addEventListener('popstate',function(){
          disableBackButton();
        });
      };
    </script>

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

        <h4>Hello! let's get started</h4>

        <h6 class="font-weight-light">Sign in to continue.</h6>

        <form class="pt-3" method="POST" action="logsucc.php">

         <div class="form-group">

          <input type="text" name="username" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required>

         </div>

         <div class="form-group">

          <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>

         </div>

         <div class="mt-3">

          <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="submit" value="SIGN IN">

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

  <script src="     ./vendors/js/vendor.bundle.base.js"></script>

  <!-- endinject -->

  <!-- Plugin js for this page -->

  <!-- End plugin js for this page -->

  <!-- inject:js -->

  <script src="../../js/off-canvas.js"></script>

  <script src="../../js/misc.js"></script>

  <!-- endinject -->

 </body>

</html>