<?php
include("db.php");
$key=$_GET['id'];
// echo "<script> alert('$key')</script>"

if(isset($_POST['update'])){
    $status=$_POST["status"];
    // $amount=$_POST["amount"];
   
    mysqli_query($conn,"UPDATE `webdesign` SET `payments`= '$status' WHERE `sno`='$key'");
    echo "<script> alert('Status Updated Successfully')</script>";
    

}
// else{
//     mysqli_error($conn);
// }
$query="SELECT * FROM `webdesign` WHERE sno='$key'";
$result=mysqli_query($conn,$query);         
$row=mysqli_fetch_array($result) ;
    // echo "<script> alert($row['pt_no'])</script>";?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Xenern Payment Updation</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      <link rel="apple-touch-icon" sizes="128x128" href="../assets/images/favicon.ico">
      
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.0">  </head>
  <body class="  ">
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
               <a href="../backend/admin.php" class="header-logo">
                  <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                  <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                  <span>Tech Electronics</span>            
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
                              <!-- <li class=" sidebar-layout">
                                  <a href="../backend/tables-basic.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Basic Tables</span>
                                  </a>
                              </li> -->
                              <li class=" sidebar-layout">
                                  <a href="table-data.php" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Data Table</span>
                                  </a>
                              </li>
                              <!-- <li class=" sidebar-layout">
                                  <a href="../backend/table-editable.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Editable Table</span>
                                  </a>
                              </li> -->
                          </ul>
                      </li>
                      <!-- <li class=" sidebar-layout">
                          <a href="../backend/chart-apex.html" class="svg-icon">
                              <i class="">
                                  <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" style="stroke-dasharray: 96, 116; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Chart</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="../backend/icon-heroicon.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                  </svg>
                              </i>
                              <span class="ml-2">Icon</span>
                          </a>
                      </li>   -->
                  </ul>
              </nav>
              <div class="pt-5 pb-5"></div>
          </div>
      </div>
       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
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
                                  <a href="#" class="search-toggle dropdown-toggle" id="notification-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="h-6 w-6 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                      </svg>
                                      <span class="bg-primary"></span>
                                  </a>
                                  
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-body p-0">
                     <div class="iq-edit-list usr-edit">
                        
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="iq-edit-list-data">
                  <div class="tab-content">
                     <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="header-title">
                                 <h4 class="card-title">Update Status</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form action="#" method="post">
                                 <div class="form-group row align-items-center">
                                    <div class="col-md-12">
                                       <div class="profile-img-edit">
                                          <div class="crm-profile-img-edit">
                                             <img class="crm-profile-pic rounded-circle avatar-100" src="../assets/images/user/1.jpg" alt="profile-pic">
                                             <div class="crm-p-image bg-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                                <input class="file-upload" type="file" accept="image/*">
                                             </div>
                                          </div>                                          
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-12">
                                    <!-- <a href ="delivery.php?id=<?php echo $row['pt_no'];?>" class="btn btn-info col-12">Update Delivery Status </a>
                                    <br>
                                    <br> -->

                                 <!-- <label>Amount</label>
                                        <input class="form-control col-sm-12" type="number" name="amount" placeholder="Enter Amount" required ><br> -->
                                    
                                        <label>Update Status</label>
                                 <select class="custom-select" id="inputGroupSelect01" name="status" aria-required="true">
                                        <!-- <option selected disabled>-select-</option> -->
                                        <option value="Verified">Verified</option>
                                        <option value="Pending" selected>Pending</option>
                                        
                                    </select></div>
                                    <br>
                                    <div class="col align-items-center">
                                        <!-- <p>Customer Id</p> -->
                                        
                                    <label>Sno Id</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['sno']?>" readonly><br>
                                    <label>Name</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['name']?>" readonly><br>
                                    <label>Email</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['email']?>" readonly><br>
                                    <label>Phone Number</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['phone']?>" readonly><br>
                                    <label>Gender</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['gender']?>" readonly><br>
                                    <label>College</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['collegename']?>" readonly><br>
                                    <label>Degree</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['degree']?>" readonly><br>
                                    <label>Course</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['course']?>" readonly><br>
                                    <label>Internship</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['internship']?>" readonly><br>
                                    <label>Passedout</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['passedout']?>" readonly><br>
                                    <label>Payment Status</label>
                                        <input class="form-control col-sm-12" type="text" placeholder="<?php echo $row['payments']?>" readonly><br>
                                        
                                    </div>
                                 <!-- <div class=" row align-items-center">
                                    <div class="form-group col-sm-6">
                                       <label for="fname">First Name:</label>
                                       <input type="text" class="form-control" id="fname" placeholder="Name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="lname">Place</label>
                                       <input type="text" class="form-control" id="lname" placeholder="Place">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="uname">Phone Number</label>
                                       <input type="number" class="form-control" id="uname" placeholder="00000-00000">
                                    </div> -->
                                    <!-- <div class="form-group col-sm-6">
                                       <label for="cname">City:</label>
                                       <input type="text" class="form-control" id="cname" value="Atlanta">
                                    </div> -->
                                    <!-- <div class="form-group col-sm-6">
                                       <label class="d-block">Gender:</label>
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input" checked="">
                                          <label class="custom-control-label" for="customRadio6"> Male </label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio7"> Female </label>
                                       </div>
                                    </div> -->
                                    <!-- <div class="form-group col-sm-6">
                                       <label for="dob">Date Of Birth:</label>
                                       <input  class="form-control" id="dob" value="1984-01-24">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label>Marital Status:</label>
                                       <select class="form-control" id="exampleFormControlSelect1">
                                          <option selected="">Single</option>
                                          <option>Married</option>
                                          <option>Widowed</option>
                                          <option>Divorced</option>
                                          <option>Separated </option>
                                       </select>
                                    </div> -->
                                    <!-- <div class="form-group col-sm-6"> -->
                                        <!-- <div class="mb-3"> -->
                                       <!-- <label>File:</label> -->
                                       <!-- <input  class="form-control" type="file" id="dob" value="1984-01-24"> -->
                                       <!-- <label for="formFile" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="formFile"></div> -->
                                       <!-- <select class="form-control" id="exampleFormControlSelect2">
                                          <option>12-18</option>
                                          <option>19-32</option>
                                          <option selected="">33-45</option>
                                          <option>46-62</option>
                                          <option>63 > </option>
                                       </select> -->
                                    </div>
                                    <!-- <div class="form-group col-sm-6">
                                       <label>Country:</label>
                                       <select class="form-control" id="exampleFormControlSelect3">
                                          <option>Caneda</option>
                                          <option>Noida</option>
                                          <option selected="">USA</option>
                                          <option>India</option>
                                          <option>Africa</option>
                                       </select>
                                    </div> -->
                                    <!-- <div class="form-group col-sm-6">
                                       <label>State:</label>
                                       <select class="form-control" id="exampleFormControlSelect4">
                                          <option>California</option>
                                          <option>Florida</option>
                                          <option selected="">Georgia</option>
                                          <option>Connecticut</option>
                                          <option>Louisiana</option>
                                       </select>
                                    </div> -->
                                    <!-- <div class="form-group col-sm-12">
                                       <label>Complaint</label>
                                       <input class="form-control" type="text" placeholder="Describe ur Complaint"> -->
                                       <!-- <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">37 Cardinal Lane
Petersburg, VA 23803
United States of America
Zip Code: 85001</textarea> -->
                                    </div>
                                 </div>
                                 <div class="text-center ">    
                
                                 <!-- <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button> -->
                                 <button type="submit"  class="btn btn-primary" name="update" >Update</button>
                                </div><br>

                              </form>








                           </div>
                        </div>
                     </div>
                     
               </div>
            </div>
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
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
    <script>
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
    
    
    <!-- Flextree Javascript-->
    <script src="../assets/js/flex-tree.min.js"></script>
    <script src="../assets/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <!-- <script src="../assets/js/table-treeview.js"></script> -->
    
    <!-- SweetAlert JavaScript -->
    <!-- <script src="../assets/js/sweetalert.js"></script> -->
    
    <!-- Vectoe Map JavaScript -->
    <!-- <script src="../assets/js/vector-map-custom.js"></script> -->
    
    <!-- Chart Custom JavaScript -->
    <!-- <script src="../assets/js/chart-custom.js"></script>
    <script src="../assets/js/charts/01.js"></script>
    <script src="../assets/js/charts/02.js"></script> -->
    
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    
    <!-- Emoji picker -->
    <!-- <script src="../assets/vendor/emoji-picker-element/index.js" type="module"></script> -->
    
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>  </body>
</html>