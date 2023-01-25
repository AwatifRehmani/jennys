<?php
include('inc/database.inc.php');
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
<div class="container col-lg-6 ">
   
<br><br> <br><br>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      
      <th scope="col">role</th>

      <th scope="row"> actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $db = new Database();
        $list = "SELECT * FROM `user`";
  $result = $db->list_entity('user');
        if($result){
            while  ($row=mysqli_fetch_assoc($result)){
                $id =$row['id'];
                $fname =$row['fname'];
                $lname =$row['lname'];
                $email =$row['email'];
                $role_id= $row ['role_id'];
                
          
                $pswd =$row['pswd'];

                echo'
                <tr>
      <th scope="row">'.$id.'</th>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$email.'</td>
      <td>'.$pswd.'</td>
      <td>'.$role_id.'</td>
      <th scope="col">
       
      <a href="update.php?updateid='.$id.'">
<button class="btn btn-success">update</button> </th></a>
    

  <th scope="col">    <a  href="delete.php?deleteid='.$id.'"><button class="btn btn-danger">delete</button> </th></a>


    </tr>      ';
          }

        }
        else{
           die(mysqli_error($link));
            }


  ?>


    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
<a href="create.php">
<button class="btn . btn-primary"  value="add user">Add users</button>

</a>

</div>




<!-- Jquery Core Js --> 

<?php
include('shared/scripts.php');
?>

</body>

</html>