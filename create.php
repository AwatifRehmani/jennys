<?php
include('inc/database.inc.php');


if(isset($_POST['create'])){
  $db = new Database();

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pswd=$_POST['pswd'];


  $dir = 'assets/img/';

  $file_name =  rand (1000,9999). basename($_FILES['img']['name']);
  $up = move_uploaded_file($_FILES['img']['tmp_name'],$dir.$file_name);

  if($up){
    $res = $db->insert_entity('user',['null', $fname, $lname, $email, $pswd,$file_name, 1]);
    header('location:test.php');


  }else{
    echo 'image not uploaded ';
  }

    // $role_id=$_POST['role_id'];

  $_SESSION['fname'] = $user['fname'];
    

// $res = $db->insert_entity('user',['null',$fname,$lname,$email,$pswd,1]);
}
?>





<!-- //    $q = "INSERT INTO `user` VALUES(null,'$fname','$lname','$email','$pswd',1)";
//  $res = mysqli_query($link,$q);
//     if($res){
//         // echo "data inserted";
//         header('Location:list.php');
//         die;
        

//     }else{
//         die("Error");
//     }

}

?> -->

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

<form action="create.php"  enctype="multipart/form-data" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example1">First name</label>

        <input  name="fname" type="text" id="form3Example1"  required class="form-control" />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form3Example2">Last name</label>
        <input name="lname" type="text" id="form3Example2" class="form-control" />
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form3Example3">Email address</label>

    <input name="email" type="email" id="form3Example3" required class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form3Example4">Password</label>

    <input name="pswd"  type="password" id="form3Example4"  required class="form-control" />
  </div>
  
    <div class="col">
  <div class="form-outline zmdi " >
  <label class="form-label zmdi zmdi-image" for="form3Example4"> Image</label>
    <input name="img"  type="file" id="form3Example" accept="Image/*" required class="form-control" />
     </div>
       </div>
  
<br>
  
<!-- 
  <select>
    <option name="1" value="1">admin</option>
    <option name="2" value="2">user</option>
</select> -->

  

  <!-- Submit button -->
  <button  type="submit" name="create" class="btn btn-primary btn-block mb-4">Create</button>
 

  

</form>


<?php
if(isset($_POST['create']) && $res){
   echo "<div class='alert-success'>Data inserted</div>";
}
else{if(isset($_POST['create'])&& @! $res)
    echo"<div class='alert-danger'>Data not inserted!</div>";
}

?>
</div>
<!-- Jquery Core Js --> 

<?php
include('shared/scripts.php');
?>

</body>

</html>