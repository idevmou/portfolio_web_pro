
<?php

include("db.php");
$query="SELECT * FROM `webdesign`";
$result=mysqli_query($conn,$query);
$count=0;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Xenern Candidate Table</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="apple-touch-icon" sizes="128x128" href="../assets/images/favicon.ico">
      
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">  </head>
  <body class=" color-light ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <div class="iq-sidebar  sidebar-default  ">
          <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
               <a href="dashboard.php" class="header-logo">
                  <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                  <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                  <span>Xenern</span>            
              </a>
              <div class="side-menu-bt-sidebar-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="side-menu">
                      <li class=" sidebar-layout">
                          <a href="dashboard.php" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                  </svg>
                              </i>
                              <span class="ml-2">Dashboard</span>
                              <!-- <p class="mb-0 w-10 badge badge-pill badge-primary">6</p> -->
                          </a>
                      </li>
                      <li class="px-3 pt-3 pb-2">
                          <span class="text-uppercase small font-weight-bold">Pages</span>
                      </li>
                       <!-- <li class=" sidebar-layout">
                          <a href="../app/adduser.php" class="svg-icon">
                              <i class="">
                                  <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                              </i><span class="ml-2">Add User</span>
                          </a>
                      </li> -->
                      <li class="sidebar-layout">
                          
                      </li>
                      
                      <li class="sidebar-layout">
                          <a href="#app5" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                  </svg>
                              </i>
                              <span class="ml-2">Table</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                          </a>
                          <ul id="app5" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                              
                              <li class="active sidebar-layout">
                                  <a href="table-data.php" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Data Table</span>
                                  </a>
                              </li>
                              
                          </ul>
                      </li>
                      
                  </ul>
              </nav>
              <div class="pt-5 pb-5"></div>
          </div>
      </div>
       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-3">
                  <div class="side-menu-bt-sidebar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                          <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                          </svg>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                              <li class="nav-item nav-icon dropdown"> 
                                 
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="notification-dropdown">
                                      <div class="card shadow-none m-0 border-0">
                                         
                                          <div class="card-body overflow-auto card-header-border p-0 card-body-list" style="max-height: 500px;">                                        
                                              <ul class="dropdown-menu-1 overflow-auto list-style-1 mb-0">
                                                  
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Customer Table </h4>
                     </div>
                    
                  <div class="header-action">
                           <!-- <i data-toggle="collapse" data-target="#datatable-1" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i> -->
                           <a class="btn btn-success text-white" href="excel.php" >Export</a>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="datatable-1">
                           
                        </div>
                     <!-- <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p> -->
                     <div class="table-responsive">
                        <table id="datatable-1" class="table data-table table-striped table-bordered" >
                           <thead>
                              <tr>
                                 <th>Sno</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone Number</th>
                                 <th>Gender</th>
                                 <th>College Name</th>
                                 <th>Internship</th>
                                 <th>Degree</th>
                                 <th>Course</th>
                                 <th>Verify</th>
                                 
                                 <th>View</th>
                                 <!-- <th class="text-right">Salary</th> -->
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                              while($row=mysqli_fetch_array($result)){
                                ?>
                                <tr>
                                <td><?php echo $row['sno']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['phone']?></td>
                                <td><?php echo $row['gender']?></td>
                                <td><?php echo $row['collegename']?></td>
                                <td><?php echo $row["internship"]?></td>

                                <td><?php echo $row['degree']?></td>
                                <td><?php echo $row['course']?></td>
                              <!-- <td><?php echo $row[""]?></td> -->
                                <td><a class="btn btn-primary    btn-sm" href="update.php?id=<?php echo$row['sno']?>">Payment Verify</a></td>
                                <td><a class="btn btn-secondary btn-sm" href="view.php?id=<?php echo$row['sno']?>">View Details</a></td>
                                
                                </tr>
                              <?php
                              }
                              ?>
                           </tbody>
                           <tfoot>
                           <tr>
                                 <th>Customer Id</th>
                                 <th>Date</th>
                                 <th>Name</th>
                                 <th>Phone Number</th>
                                 <th>Place</th>
                                 <th>Status</th>
                                 <th>Complaint</th>
                                 <th>Amount</th>
                                 <th>Delivered Status</th>
                                 <th>Action</th>
                                 <th>View</th>
                                 <!-- <th class="text-right">Salary</th> -->
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                  </div>                  
               </div>
              
    <!-- Wrapper End-->
    <!-- <footer class="iq-footer"> -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-8 text-right ">
                    <span class="mr-1">
                        Copyright
                        <script>document.write(new Date().getFullYear())</script>© <a href="#" class="">Datum</a>
                        All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </footer>    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <script src="../assets/js/sidebar.js"></script>
    <!--pagetimeout-->
    <!-- <script>
        var inactivityTimeout = 300000; // 5 minutes in milliseconds

        var resetTimeout = function() {
            clearTimeout(inactivityTimer);
            inactivityTimer = setTimeout(logout, inactivityTimeout);
        };

        var logout = function() {
            // Redirect to a logout or timeout page
            window.location.href = '/index.php';
        };

        // Initialize the timer
        var inactivityTimer = setTimeout(logout, inactivityTimeout);

        // Reset the timer on user activity
        document.addEventListener('touchstart', resetTimeout);
        document.addEventListener('click', resetTimeout);
        document.addEventListener('keydown', resetTimeout);
    </script>
     -->
    
    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>
    <script src="../assets/js/charts/01.js"></script>
    <script src="../assets/js/charts/02.js"></script>
    
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    
    <!-- Emoji picker -->
    <!-- <script src="../assets/vendor/emoji-picker-element/index.js" type="module"></script> -->
    
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>  </body>
</html>