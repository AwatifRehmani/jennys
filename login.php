<?php
include('db.php');

if (isset($_POST['login'])){
  $email=$_POST['email'];
  $pswd=$_POST['pswd'];

 $login="SELECT * from `user` where `email` ='$email' and `pswd` = '$pswd' ";
  $res = mysqli_query($link,$login);

  if ($res->num_rows > 0){
    $user= $res->fetch_assoc();
    $_SESSION['email']= $user['email'];
    $_SESSION['role_id']= $user['role'];
    $_SESSION['user_id']=$user['role_id'];
    $_SESSION['fname'] = $user['fname'];

    
      // header('location:index.php');
      // die;

      if($user['role_id'] == 1){
        header('location:admin.php');

      }
        else if($user['role_id'] == 2){
          header('location:index.php');

        }

  }
  else{
    echo('invalid email or password');
  }
}
?>

<?php
include('shared/head.php');
?>

<head>
    <style>

        
    </style>
</head>
<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>

<!-- Right Icon menu Sidebar -->

<!-- Left Sidebar -->

<?php
include('shared/left-bar.php');
?>


<!-- Right Sidebar -->

<?php 
include('shared/right-bar.php');
?>

<!-- Main Content -->

<body>
    

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-cent er">
                  <img src="assets/images/logo.svg"
                    style="width: 185px;" alt="logo">
                </div>

                <form method="post">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example11" class="form-control"
                      placeholder="Phone number or email address" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="pswd" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" value="login" class="btn btn-primary" name="login" >
                    <br><a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button name="login" type="button" class="btn btn-outline-danger">login new</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<!-- Jquery Core Js --> 

<?php
include('shared/scripts.php');
?>

</body>

</html> 