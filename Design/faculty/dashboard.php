<?php
    include '../php/middleware.php';
    include '../php/f_dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Instructor Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.addons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- Layout style -->
    <!-- <link rel="shortcut icon" href="asssets/images/favicon.ico" /> -->
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="index.html">
          <img class="logo" src="../assets/images/logo.png" alt="">
          <img class="logo-mini" src="../assets/images/logo_mini.png" alt="">
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="../assets/images/profile/male/image_1.png" alt="profile image">
          </div>
          <div class="info-wrapper">
            <h4 class="user-name">Mr. Faculty</h4>
          </div>
          <?php
            if($_SESSION['role']==6){
              echo '<div class="row showcase_row_area mt-4">
              <div class="col-md-4 text-right">
                <label for="inputType14">Faculty</label>
              </div>
              <div class="col-md-4 showcase_content_area mb-2">
                <div class="demo-wrapper">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="role-switch1"> 
                    <label class="custom-control-label" for="role-switch1"></label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-left">
                <label for="inputType14">Dean</label>
              </div>
            </div>';
            }else if($_SESSION['role']==4){
              echo '<div class="row showcase_row_area mt-4">
              <div class="col-md-4 text-right">
                <label for="inputType14">Faculty</label>
              </div>
              <div class="col-md-4 showcase_content_area mb-2">
                <div class="demo-wrapper">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="role-switch2"> 
                    <label class="custom-control-label" for="role-switch2"></label>
                  </div>
                </div>
              </div>
              <div class="col-md-4 text-left">
                <label for="inputType14">Head</label>
              </div>
            </div>';
            }
          ?>          
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
          <li>
            <a href="dashboard.php">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a href="sections-list.php">
              <span class="link-title">Sections</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a href="assessments-list.php">
              <span class="link-title">Assessments</span>
              <i class="mdi mdi-clipboard link-icon"></i>
            </a>
          </li>
          <li>
            <a href="reports.html">
              <span class="link-title">Reports</span>
              <i class="mdi mdi-chart-areaspline link-icon"></i>
            </a>
          </li>
          <li>
            <a href="question-banks.php">
              <span class="link-title">Question Bank</span>
              <i class="mdi mdi-book-open-variant link-icon"></i>
            </a>
          </li>
          <li>
            <a href="../php/login.php?logout=1">
              <span class="link-title">Logout</span>
              <i class="mdi mdi-logout link-icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
            <div class="row">
              <div class="col-12 py-5">
                <h4>Dashboard</h4>
                <div class="viewport-header">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb has-arrow">
                      <li class="breadcrumb-item">
                        <a href="dashboard.php">Instructor</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Dashboard</li>                      
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-4 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex justify-content-between">
                          <p class="card-title"><?php echo $asmnts; ?></p>
                        </div>
                        <h5 class="text-black">Assessments</h5>
                      </div>
                      <div class="col-3">
                        <h1><i class="mdi mdi-account-multiple"></i></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-4 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex justify-content-between">
                          <p class="card-title"><?php echo $sctns; ?></p>
                        </div>
                        <h5 class="text-black">Total Section</h5>
                      </div>
                      <div class="col-3">
                        <h1><i class="mdi mdi-animation"></i></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-4 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex justify-content-between">
                          <p class="card-title"><?php echo $crss; ?></p>
                        </div>
                        <h5 class="text-black">Total Courses</h5>
                      </div>
                      <div class="col-3">
                        <h1><i class="mdi mdi-library-books"></i></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row d-flex justify-content-center mt-5">
            <div class="col-6" <?php if(isset($_GET['semester'])){echo "hidden";} ?>>
              <div class="grid">
                <div class="grid-body">
                  <div class="item-wrapper">
                    <form method="GET">
                      <div class="form-group input-rounded">
                        <input type="text" class="form-control" placeholder="Semester" spellcheck="false" data-ms-editor="true" name="semester">
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row" <?php if(!isset($_GET['semester'])){echo "hidden";} ?>>
            <div class="col-md-12">
              <div class="grid">
                <div class="grid-body">
                  <h2 class="grid-title">Course Wise Performance Trend</h2>
                  <div class="item-wrapper">
                    <canvas id="course-trend" height="100"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <!-- content viewport ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              <ul class="text-gray">
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
              <small class="text-muted d-block">Copyright © 2021 <a href="#" >G4</a>. All rights reserved</small>
              <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../assets/js/charts/chartjs.addon.js"></script>
    <script src="../assets/vendors/js/vendor.addons.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/coolors.js"></script>
    <!-- endbuild -->
    <script>
      $("#role-switch1").change(function(){
        window.location.href = "../dean/dashboard.php";
      });
      $("#role-switch2").change(function(){
        window.location.href = "../head/dashboard.php";
      });

      var ctx = $('#course-trend');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: [
                <?php
                  if(sizeof($course)!=0){
                    foreach($course as $k => $v){
                      echo "'$k', ";
                    }
                  }                  
                ?>
              ],
              datasets: [{
                  label: '# of Enrolled Students',
                  data: [
                    <?php
                      if(sizeof($course)!=0){
                        foreach($course as $k => $v){
                          echo "$v, ";
                        }
                      }                  
                    ?>
                  ],
                  backgroundColor: [
                    <?php
                      $indx = 0;
                      if(sizeof($course)!=0){
                        foreach($course as $k => $v){
                          echo "colors[".$indx."], ";
                          $indx++;
                        }
                      }                  
                    ?>
                  ]
              }]
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });

    </script>



  </body>
</html>