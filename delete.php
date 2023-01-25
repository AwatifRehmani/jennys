
<?php
include('inc/database.inc.php');
?>


<?php

$db = new Database();


if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    // $dlt="delete from `user` where id=$id";
    // $result=mysqli_query($link,$dlt);

    echo" = $db->dlt_query(`user`,'$id',$id)";
    
    if($res){
        echo "Deleted successfully";
        header('location:list.php');
    }
    else{
        die;
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

<div id="container-fluid">




</div>
<!-- Jquery Core Js --> 

<?php
include('shared/scripts.php');
?>

</body>

</html>