<?php
include("db.php");
if(isset($_POST["submit"])){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $gender=$_POST["gender"];
  $collegename=$_POST["collegename"];
  $degree=$_POST["degree"];
  $course=$_POST["course"];
  $internship=$_POST["internship"];
  $passedout=$_POST["passedout"];
  $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
if(strlen($phone)==10){


  $query="INSERT INTO `webdesign`(`name`, `email`,`phone`,`collegename`, `degree`, `course`, `passedout`,`screenshot`,`gender`,`internship`) VALUES
   ('$name','$email','$phone','$collegename','$degree','$course','$passedout','$image','$gender','$internship')";
  // $result=mysqli_query($conn,$query);
  if (mysqli_query($conn,$query)){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Form Submitted Sucessfully</strong> We will Contact You soon !!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php
  }

  else{
    echo(mysqli_error($result));
  }
}
else{
  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Phone Number</strong> Must be in 10 Characters.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php
}
}

?>









<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registration</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container col-12">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/login.png" alt="login" class="login-card-img">
            
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div>
                <!-- <img class="logo" src="assets/images/logo.png" alt="logo"> -->
                <img src="assets/images/logo.png" style="width: 350px; height:80px;" class="media_logo" alt="">
                <!-- <div style=""> -->
                <!-- <span style="font-size: 25px; font-weight:bolder;position:relative; padding-top:3px; margin-top:10px; border: 2px;">Xenern InfoTech</span> -->
                <!-- </div>               -->
              </div>
              
              <p class="login-card-description">Web Developement Internship Registration Form </p>
              <form action="#" method="post" enctype="multipart/form-data">
                  <!-- <div class="form-group ">
                    <label for="Name" class="sr-only">Name</label>
                    <label >Program</label>
                    <input type="text" name="program" id="programtxt" class="form-control " value="Web Development" readonly>
                  </div> -->
                  <div class="form-group ">
                    <!-- <label for="Name" class="sr-only">Name</label> -->
                    <label >Name</label>
                    <input type="text" name="name" id="name" class="form-control " placeholder="Enter a Name" required>
                  </div>
                  <div class="form-group">
                    <label >Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required>
                  </div>
                  <div class="form-group">
                    <label >Phone Number</label>
                    <input type="text" name="phone" id="email" class="form-control" placeholder="Phone Number" required>
                  </div>
                  <div class="form-group">
                    <label >College Name</label>
                    <input type="text" name="collegename" id="collegename" class="form-control" placeholder="College Name" required>
                  </div>
                  <div class="form-group" >
                    <label >Degree</label>
                    <!-- <select class="form-control" name="degree" required>
                      <option selected disabled>Select</option>
                      <option value="BE/BTech">BE/BTech</option>
                      <option value="BCA">BCA</option>
                      <option value="Bsc">Bsc</option>

     -->
                    <input type="text" name="degree" id="collegename" class="form-control" placeholder="Degree" required>
                    <p id="hint" class="text-danger ">ex:BE,BTech,BCA,etc</p>
                    <!-- </select> -->
                  </div>
                  <div class="form-group" >
                    <label >Internship</label>
                    <select class="form-control" name="internship" required>
                      <!-- <option selected disabled>Select</option> -->
                      <option selected value="Web Developement">Web Developement</option>
                      <option value="Git/Github">Git/Github</option>
                      <option value="Gen AI">Gen AI </option>

                    
                      
                    </select>
                  <div class="form-group" >
                    <label >Gender</label>
                    <select class="form-control" name="gender" required>
                      <!-- <option selected disabled>Select</option> -->
                      <option selected value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Others">Others </option>

                    
                      
                    </select>
                    <label >Course</label>
                    <input type="text" name="course" id="collegename" class="form-control" placeholder="Course" required>
                    <p id="hint" class="text-danger ">ex:Computer Science and Engineering</p>
                  </div>
                  <div class="form-group" >
                    <label >Passed Out Year</label>
                    <!-- <select class="form-control" name="passedout" required>
                      <option selected disabled>Select</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                      <option value="2027">2027</option>
                      

                    
                      
                    </select> -->
                    
                    <input type="text" name="passedout" id="collegename" class="form-control" placeholder="Passedout" required>
                    <p id="hint" class="text-danger ">ex:2023</p>
                  </div>
                  <div class="form-group mb-4" >
                    <label>QR Code</label>
                    <br>
                    <img src="./assets/images/download (5).png" width="150px" height="150px">
                  </div>
                  
                  <div class="form-group mb-4">
                    <input type="file" name="image" required >
                  </div>
                  <!-- <a type="submit">Submit</a> -->
                  <button  id="login" class="btn btn-block login-btn mb-4" type="submit" value="Login" name="submit">Sumit</button>
                </form>
                <!-- <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p> -->
                <!-- <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav> -->
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
