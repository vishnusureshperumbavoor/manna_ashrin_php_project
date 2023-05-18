<?php
include 'connection.php';  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Infinio Technology Solutions</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="./vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/select2/select2.min.css">
    <link rel="stylesheet" href="./vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="images/logo.svg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome User!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
           
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile </a>
                <!-- <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a> -->
                <a class="dropdown-item" href="changepassword.php"><i class="dropdown-item-icon icon-question text-primary"></i> Change Password</a>
                <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
     <!-- partial -->
     <div class="container-fluid page-body-wrapper">
      <!-- partial:    ./partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <!-- <li class="nav-item nav-profile"> -->
            <!-- <a href="#" class="nav-link"> -->
              <!-- <div class="profile-image">
                <img class="img-xs rounded-circle" src="./images/faces/face8.jpg" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper">
                <p class="profile-name">Allen Moreno</p>
                <p class="designation">Administrator</p>
              </div>
              <div class="icon-container">
                <i class="icon-bubbles"></i>
                <div class="dot-indicator bg-danger"></div>
              </div> -->
            <!-- </a> -->
          <!-- </li> -->
          <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php">
              <span class="menu-title">Dashboard</span>
              <i class="icon-screen-desktop menu-icon"></i>
            </a>
          </li>
          <li class="nav-item nav-category"><span class="nav-link">Client</span></li>
         

         
          <li class="nav-item">
            <a class="nav-link" href="./pages/tables/client.html">
              <span class="menu-title">Client Details</span>
              <i class="icon-globe menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/forms/newclient.html">
              <span class="menu-title">New Client</span>
              <i class="icon-globe menu-icon"></i>
            </a>
          </li>

          <li class="nav-item nav-category"><span class="nav-link">Project</span></li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/tables/project.html">
              <span class="menu-title">Project Details</span>
              <i class="icon-globe menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/forms/newproject.html">
              <span class="menu-title">New Project</span>
              <i class="icon-globe menu-icon"></i>
            </a>
          </li>

          <li class="nav-item nav-category"><span class="nav-link">Employee</span></li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/tables/employee.html">
              <span class="menu-title">Employee Details</span>
              <i class="icon-globe menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/forms/newemployee.html">
              <span class="menu-title">New Employee</span>
              <i class="icon-globe menu-icon"></i>
            </a>
          </li>

          <li class="nav-item nav-category"><span class="nav-link">Expense</span></li>
          <li class="nav-item">
            <a class="nav-link" href="./pages/tables/expense.html">
              <span class="menu-title">Expense Details</span>
              <i class="icon-globe menu-icon"></i>
            </a>
          </li>
       

          <!-- <li class="nav-item pro-upgrade">
            <span class="nav-link">
              <a class="btn btn-block px-0 btn-rounded btn-upgrade" href="https://www.bootstrapdash.com/product/stellar-admin-template/" target="_blank"> <i class="icon-badge mx-2"></i> Upgrade to Pro</a>
            </span>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
       
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">My Profile</h4>
                    <p class="card-description"> Personal Details </p>
                   
                    <form class="forms-sample">
                      <div class="form-group">
                      <?php
                      $uname = $_SESSION['username'];
                      $sql = "SELECT * FROM `login` WHERE `username`='$uname'";
                      $conn=new mysqli($servername, $username, $password, $db_name, 3306);
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<label>Name</label> <input type='text' class='form-control' name='username' value='" . $row['username'] . "'/>";
                            echo "<label>ID</label> <input type='text' class='form-control' name='ID' value='" . $row['ID'] . "'/>";
                            echo "<label>Email</label> <input type='text' class='form-control' name='email' value='" . $row['email_id'] . "'/>";
                            echo "<label>Phone No</label> <input type='text' class='form-control' name='phone' value='" . $row['phone_no'] . "'/>";
                            echo "<label>Address</label> <input type='text' class='form-control' name='address' value='" . $row['address'] . "'/>";
                        }
                    } else {
                        $numRows = mysqli_num_rows($result);
                        echo "Number of rows: " . $numRows . "<br>";
                        echo "SQL Query: " . $sql;
                    }
                    
?>

<!--                 
                       <div class="form-group">
              //           <label for="exampleInputName1">ID</label>
              //           <input type="password" class="form-control" id="exampleInputID" name="ID" placeholder="ID">
              //         </div> 
              //         <div class="form-group">
              //           <label for="exampleInputEmail3">Email address</label>
              //           <input type="email" class="form-control" id="exampleInputEmail3" name="email_id" placeholder="Email">
              //         </div>
                     
              //         <div class="form-group">
              //           <label for="exampleInputEmail3">Phone Number</label>
              //           <input type="number" class="form-control" id="exampleInputPNumber"  name="phone_no" placeholder="Phone Number">
              //         </div>
                     
                   
              //         <div class="form-group">
              //           <label for="exampleTextarea1">Address</label>
              //           <textarea class="form-control" id="exampleTextarea1"  name="address" rows="4"></textarea>
              //         </div>
                   
              //         <button type="submit" class="btn btn-primary mr-2">Save</button>
              //         <button class="btn btn-light">Cancel</button>
              //       </form>
              //     </div>
              //   </div>
              // </div> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/select2/select2.min.js"></script>
    <script src="./vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./js/off-canvas.js"></script>
    <script src="./js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/typeahead.js"></script>
    <script src="./js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
