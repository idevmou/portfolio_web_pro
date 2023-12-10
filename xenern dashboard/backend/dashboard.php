<?php
include("db.php");
$sql="SELECT * FROM `webdesign` ORDER by sno DESC LIMIT 10";
$c="SELECT count(sno) as c from webdesign where  `internship`='Web Developement'";
$res=mysqli_fetch_array(mysqli_query($conn,$c));
$c1="SELECT COUNT(sno) as c1 from webdesign where `internship`='Git/Github';";
$res1=mysqli_fetch_array(mysqli_query($conn,$c1));
$c2="SELECT count(sno) as c2 from webdesign where  `internship`='Gen AI'";
$res2=mysqli_fetch_array(mysqli_query($conn,$c2));
$result=mysqli_query($conn,$sql);
$count=0;
// while($result){}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Xenern Dashboard</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="../assets/images/favicon.ico" />
      
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
               <a href="../backend/dashboard.php" class="header-logo">
                  <img src="../assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                  <img src="../assets/images/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                  <span>Xenern Info Tech</span>            
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
                      <li class="active sidebar-layout">
                          <a href="../backend/dashboard.php" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                  </svg>
                              </i>
                              <span class="ml-2">Dashboard</span>
                              <!-- <p class="mb-0 w-10 badge badge-pill badge-primary">6</p> -->
                          </a>
                      </li>
                      <!--  -->
                      
                      <!--  -->
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
                             
                              <li class=" sidebar-layout">
                                  <a href="../backend/table-data.php" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Data Table</span>
                                  </a>
                              </li>
                              <!--  -->
                          </ul>
                      </li>
                      
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
                                  <!-- <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="notification-dropdown"> -->
                                      <!--  -->
                                  </div>
                              </li>                        
                              <!-- <l -->
                              <!--  -->
                              <!--  -->
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>
      <div class="content-page">
<div class="container-fluid">
   <div class="row">
      <div class="col-md-6 mb-4 mt-1">
         <!--  -->
         </div>
      </div>
      <div class="col-lg-12 col-md-12">
         <div class="row">
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <a href="webdesigntable.php">
                     <div class="d-flex align-items-center" >
                        <div class="">
                            <p class="mb-2 text-secondary">Web development</p>
                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                               <h5 class="mb-0 font-weight-bold"><?php echo $res["c"]?></h5>
                               <!-- <p class="mb-0 ml-3 text-success font-weight-bold">+3.55%</p> -->
                            </div>                            
                        </div>
                     </div></a>
                  </div>
               </div>   
               <!-- <div class="card">
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-2 text-secondary">Git/GitHub</p>
                            <div class="d-flex flex-wrap justify-content-start align-items-center">
                               <h5 class="mb-0 font-weight-bold"><?php echo $res["c"]?></h5>
                               <p class="mb-0 ml-3 text-success font-weight-bold">+3.55%</p>
                            </div>                            
                        </div>
                     </div>
                  </div>
               </div>    -->
            </div>
               <div class="col-md-4">
                  <div class="card">
                  <div class="card-body">
                     <a href="githubtable.php">
                     <div class="d-flex align-items-center">
                           <div class="">
                              <p class="mb-2 text-secondary">Git/GitHub</p>
                              <div class="d-flex flex-wrap justify-content-start align-items-center">
                                 <h5 class="mb-0 font-weight-bold"><?php echo $res1['c1']?></h5>
                                 <!-- <p class="mb-0 ml-3 text-success font-weight-bold">+2.67%</p> -->
                              </div>   
                                                       
                           </div>
                           
                     </div>
                  </div>
                  </a>
               </div>   
            </div>
            <div class="col-md-4">
            <div class="card">
               <a href="genai.php">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                           <p class="mb-2 text-secondary">Gen AI</p>
                           <div class="d-flex flex-wrap justify-content-start align-items-center">
                              <h5 class="mb-0 font-weight-bold"><?php echo $res2['c2']?></h5>
                              <!-- <p class="mb-0 ml-3 text-danger font-weight-bold">-9.98%</p> -->
                           </div>                            
                        </div>
                    </div>
                </div>
                </a>
            </div>   
         </div>
            
      <div class="col-lg-13 col-md-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Lastest Registration</h4>
               </div>
               <div class="card-header-toolbar d-flex align-items-center">                  
                  <div class="dropdown">
                        <a href="#" class="text-muted pl-3" id="dropdownMenuButton-customer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="currentColor" stroke-width="2" aria-hidden="true" focusable="false" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                              <g fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <circle cx="12" cy="12" r="1"/>
                                 <circle cx="19" cy="12" r="1"/>
                                 <circle cx="5" cy="12" r="1"/></g>
                           </svg>
                        </a>
                        <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-customer">
                           <a class="dropdown-item" href="#">
                                 <svg class="svg-icon text-secondary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                 </svg>
                                 Edit
                           </a>
                           <a class="dropdown-item" href="#">
                                 <svg class="svg-icon text-secondary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                 </svg>
                                 View
                           </a>
                           <a class="dropdown-item" href="#">
                                 <svg class="svg-icon text-secondary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                 </svg>
                                 Delete
                           </a>
                        </div> -->
                     </div>
               </div>
            </div>
            <div class="card-body p-0">
               <div class="table-responsive">
                  <table class="table mb-0">
                     <thead class="table-color-heading">
                        <tr class="text-secondary">
                           <th scope="col">Sno</th>
                           <th scope="col">Name</th>
                           <th scope="col">Email</th>
                           <th scope="col">Gender</th>
                           <th scope="col">College Name</th>
                           <th scope="col">Course</th>
                           <!-- <th scope="col" class="text-right">Total</th> -->
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        while($row=mysqli_fetch_array($result)){
                           $count+=1;
                           
                           ?>
                         
                        <tr class="white-space-no-wrap">
                           <td><?php echo $count  ?></td>
                           
                           
                           
                           <td>
                              <div class="d-flex align-items-center">
                                 <div class="avatar-45 mr-2">
                                    <img src="../assets/images/user/1.jpg" class="img-fluid rounded-circle"
                                       alt="image">
                                 </div>
                                 <div><?php echo $row["name"] ?></div>
                              </div>
                           </td>
                           
                           <td><?php echo $row["email"] ?></td>
                           <td><?php echo "Male" ?></td>
                           
                           <td><?php echo $row["collegename"] ?></td>
                           <td><a class="btn btn-secondary text-white btn-sm" href="view.php?id=<?php echo  $row["sno"]?>">view</a></td>
                           <!-- <td>
                              <p class="mb-0 text-success d-flex justify-content-start align-items-center">
                                 <small><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                                 <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle></svg>
                                 </small> Completed
                              </p>
                           </td> -->
                           <!-- <td class="text-right">$104.98</td> -->
                        </tr>
                        <?php
                        }
                        
                        ?>              
                     </tbody>
                  </table>
                  <div class="d-flex justify-content-end align-items-center border-top-table p-3">
                           <a class="btn btn-secondary btn-sm" href="table-data.php">See All</a>
                        </div>
               </div>
            </div>
         </div>
      </div>

   </div>
    <!-- Page end  -->
</div>
      </div>
    </div>
    <!-- Wrapper End-->
    <!-- <footer class="iq-footer">
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
    </footer>     -->
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>
    
    <script src="../assets/js/sidebar.js"></script>
    
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
    <script src="../assets/vendor/emoji-picker-element/index.js" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>  </body>
</html>