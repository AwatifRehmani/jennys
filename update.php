
<?php
include('db.php');
$id=$_GET['updateid'];
$data="SELECT * FROM `user` where id=$id";
$result=mysqli_query($link,$data); 

// show data in row
$row=mysqli_fetch_assoc($result);
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$pswd=$row['pswd'];
  

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];
    
   
    $update= "update `user` set id=$id,fname='$fname'
    ,lname='$lname',email='$email',pswd='$pswd'  where id=$id";
    
    $result=mysqli_query($link,$update);


    if($result){
        // echo'data updated';
    }
    else{
        echo' data cannot be updated';
    }
  
}


        


?>
<?php
include('shared/head.php');
?>

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
<br>
<br><br>
<div class="container col-sm-6">

<form action=""   method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input  name="fname" value="<?php echo $fname;?>" type="text" id="form3Example1"  required class="form-control" />
        <label class="form-label" for="form3Example1">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input name="lname" value="<?php echo $lname;?>" type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">Last name</label>
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input name="email" value="<?php echo $email;?>" type="email" id="form3Example3" required class="form-control" />
    <label class="form-label" for="form3Example3">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input name="pswd" value="<?php echo $pswd;?>" type="password" id="form3Example4"  required class="form-control" />
    <label class="form-label" for="form3Example4">Password</label>
  </div>

  

  <!-- Submit button -->
  <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">update</button>

 
</form>

<?php
if(isset($_POST['submit']) && $result){
   echo "<div class='alert-success'>Data update</div>";
   echo '<a href="list.php"> <button class="btn btn-warning"> go back to list </button>';
}
else{if(isset($_POST['submit'])&& @! $result)
    echo"<div class='alert-danger'>Data not updated!</div>";
}

?>
</div>
<!-- Jquery Core Js --> 

<?php
include('shared/scripts.php');
?>

</body>

</html>