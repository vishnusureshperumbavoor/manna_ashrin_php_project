<?php
include 'connection.php';
$query="select * from clients_tb";
$result=mysqli_query($conn,$query);
$keyword=$_GET['search'];
$keysql="SELECT * FROM `clients_tb` where `ID`='$keyword' or `name`='$keyword' or `email_id`='$keyword' or `phone_no`='$keyword' or `address`='$keyword'";
$result1=mysqli_query($conn,$keysql);
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
      <!-- partial:    ./partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.php">
            <img src="images/logo.svg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome User!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
              <i class="icon-magnifier"></i>
              <input name="search" type="text" class="form-control" placeholder="Search Here" value="" title="Search here"/>
              <input type="submit" hidden="true">
            
            </form>
          
            <!-- <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                    <p class="font-weight-light small-text"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li> -->
            <!-- <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
                <span class="profile-text font-weight-normal">English</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-fr"></i> French </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ae"></i> Arabic </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-ru"></i> Russian </a>
              </div>
            </li> -->
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> Henry Klein </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item" href="myprofile.html"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile </a>
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
            <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Basic UI Elements</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="    ./pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="    ./pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li> -->
          
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="menu-title">Client Details</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newclient.php">
                <span class="menu-title">New Client</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>

            <li class="nav-item nav-category"><span class="nav-link">Project</span></li>
            <li class="nav-item">
              <a class="nav-link" href="newprojects.php">
                <span class="menu-title">Project Details</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newproject.php">
                <span class="menu-title">New Project</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>

            <li class="nav-item nav-category"><span class="nav-link">Employee</span></li>
            <li class="nav-item">
              <a class="nav-link" href="employee.php">
                <span class="menu-title">Employee Details</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newemployee.php">
                <span class="menu-title">New Employee</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>

            <li class="nav-item nav-category"><span class="nav-link">Expense</span></li>
            <li class="nav-item">
              <a class="nav-link" href="expense.php">
                <span class="menu-title">Expense Details</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
          


            <!-- <li class="nav-item">
              <a class="nav-link" href="    ./pages/icons/simple-line-icons.html">
                <span class="menu-title">Icons</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="    ./pages/forms/basic_elements.html">
                <span class="menu-title">Form Elements</span>
                <i class="icon-book-open menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="    ./pages/charts/chartist.html">
                <span class="menu-title">Charts</span>
                <i class="icon-chart menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="    ./pages/tables/basic-table.html">
                <span class="menu-title">Tables</span>
                <i class="icon-grid menu-icon"></i>
              </a> -->
            </li>
            <!-- <li class="nav-item nav-category"><span class="nav-link">Sample Pages</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">General Pages</span>
                <i class="icon-doc menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="    ./pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="    ./pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="    ./pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="    ./pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="    ./pages/samples/blank-page.html"> Blank Page </a></li>
                </ul>
              </div>
            </li> -->

          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
          
                   
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Client Details</h4>
                    <ul class="navbar-nav navbar-nav-right ml-auto"  >
                    <a href="client.php" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
<!-- <button class="btn btn-block btn-primary btn-lg front-weight-medium auth-form-btn mr-2" type="submit" placeholder="view all " ></button> -->
</ul>
                     </div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID</th>
                          <th> name</th>
                          <th> email_ID </th>
                          <th> phone_no </th>
                          <th>address </th>
                          <!-- <th>status </th>
                          <th>Deadline</th> -->
                        </tr>
                      </thead>
                      <tr>
                        <?php
                        if($keyword==NULL)
                        {
                          while($row=mysqli_fetch_assoc($result))
                          {

                       ?>
                       <td>
                         <?php echo $row['ID'];?></td>
                         <td> <?php echo $row['name'];?></td>
                         <td> <?php echo $row['email_id'];?></td>
                         <td> <?php echo $row['phone_no'];?></td>
                         <td> <?php echo $row['address'];?></td>
                     
                        </tr>

                       <?php
                           }
                        }
                        else 
                        {
                          while($row=mysqli_fetch_assoc($result1))
                          {

                       ?>
                       <td>
                         <?php echo $row['ID'];?></td>
                         <td> <?php echo $row['name'];?></td>
                         <td> <?php echo $row['email_id'];?></td>
                         <td> <?php echo $row['phone_no'];?></td>
                         <td> <?php echo $row['address'];?></td>
                     
                        </tr>

                       <?php
                           }

                        }
                        
                        ?>
                           
                        
                        <!-- <tr>
                        //   <td class="py-1">
                        //     <img src="./images/faces-clipart/pic-2.png" alt="image" />
                        //   </td>
                        //   <td> Messsy Adam </td>
                        //   <td>
                        //     <div class="progress">
                        //       <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        //     </div>
                        //   </td>
                        //   <td> $245.30 </td>
                        //   <td> July 1, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        // </tr>
                        // <tr>
                        //   <td class="py-1">
                        //     <img src="./images/faces-clipart/pic-3.png" alt="image" />
                        //   </td>
                        //   <td> John Richards </td>
                        //   <td>
                        //     <div class="progress">
                        //       <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        //     </div>
                        //   </td>
                        //   <td> $138.00 </td>
                        //   <td> Apr 12, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        // </tr>
                        // <tr>
                        //   <td class="py-1">
                        //     <img src="./images/faces-clipart/pic-4.png" alt="image" />
                        //   </td>
                        //   <td> Peter Meggik </td>
                        //   <td>
                        //     <div class="progress">
                        //       <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        //     </div>
                        //   </td>
                        //   <td> $ 77.99 </td>
                        //   <td> May 15, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        // </tr>
                        // <tr>
                        //   <td class="py-1">
                        //     <img src="./images/faces-clipart/pic-1.png" alt="image" />
                        //   </td>
                        //   <td> Edward </td>
                        //   <td>
                        //     <div class="progress">
                        //       <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        //     </div>
                        //   </td>
                        //   <td> $ 160.25 </td>
                        //   <td> May 03, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        // </tr>
                        // <tr>
                        //   <td class="py-1">
                        //     <img src="./images/faces-clipart/pic-2.png" alt="image" />
                        //   </td>
                        //   <td> John Doe </td>
                        //   <td>
                        //     <div class="progress">
                        //       <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        //     </div>
                        //   </td>
                        //   <td> $ 123.21 </td>
                        //   <td> April 05, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        // </tr>
                        // <tr>
                        //   <td class="py-1">
                        //     <img src="./images/faces-clipart/pic-3.png" alt="image" />
                        //   </td>
                        //   <td> Henry Tom </td>
                        //   <td>
                        //     <div class="progress">
                        //       <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        //     </div>
                        //   </td>
                        //   <td> $ 150.00 </td>
                        //   <td> June 16, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        //   <td> May 15, 2015 </td>
                        // </tr> -->
                     
                    </table>
                  </div>
                </div>
              </div>
             
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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./js/off-canvas.js"></script>
    <script src="./js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>