<!doctype html>
<html class="no-js " lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<?php
include('shared/head.php');
?>

<body class="theme-purple theme-dark">



<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>


<?php
include('shared/left-bar.php');
?>


<!-- Right Sidebar -->

<?php 
include('shared/right-bar.php');
?>

<!-- Main Content -->


<div id="container">
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


<section class="content">
    <div class="body_scroll">
     <div class="block-header">
            <div class="row">
<div class="col-lg-7 col-md-6 col-sm-12">
                               
                
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Examples -->
          

            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Order</strong> list  </h2>
                            
                        </div>
                        <div class="body">
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-dark table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Order#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Customer</th>
                                            <th>Quantity</th>
                                            <th>Bill</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <tr>
                                            <td>1214423443</td>
                                            <td><img src="assets/images/ecommerce/1.jpg"  height="60" width="100" alt=""></td>
                                            <td>red hoops</td>
                                            <td>cosematic</td>
                                            <td>martin more</td>
                                            <td>2</td>
                                            <td>$40</td>
                                            <td><button type="button" data-color="green" class="btn bg-green waves-effect">completed</button></td>
                                        </tr>
                                        <tr>
                                            <td>12232323143</td>
                                            <td><img src="assets/images/ecommerce/1.jpg"  height="60" width="100" alt=""></td>
                                            <td>red hoops</td>
                                            <td>jewlery</td>
                                            <td>john mair</td>
                                            <td>4</td>
                                            <td>$125</td>
                                            <td><button type="button" data-color="yellow" class="btn bg-yellow waves-effect">pending</button></td>
                                        </tr>
                                        <tr>
                                            <td>13243452143</td>
                                            <td><img src="assets/images/ecommerce/1.png"  height="60" width="100" alt=""></td>
                                            <td>sara martin</td>
                                            <td>jewlery</td>
                                            <td>emma gilbert</td>
                                            <td>2</td>
                                            <td>$40</td>
                                            <td><button type="button" data-color="brown" class="btn bg-brown waves-effect">cancelled</button></td>
                                        </tr>
                                        <tr>
                                            <td>12167567443</td>
                                            <td><img src="assets/images/1UfJS2g.jpg"  height="60" width="100" alt=""></td>
                                            <td>franklin</td>
                                            <td>cosematic</td>
                                            <td>collin</td>
                                            <td>2</td>
                                            <td>$40</td>
                                            <td><button type="button" data-color="purple" class="btn bg-purple waves-effect">ready</button></td>
                                        </tr>
                                        <tr>
                                            <td>12134572543</td>
                                            <td><img src="assets/images/1UfJS2g.jpg"  height="60" width="100" alt=""></td>
                                            <td>red hoops</td>
                                            <td>jewlery</td>
                                            <td>emma gilbert</td>
                                            <td>2</td>
                                            <td>$40</td>
                                            <td><button type="button" data-color="black" class="btn bg-black waves-effect">returned</button></td>
                                        </tr>

                                        
                                            <td>121432433</td>
                                            <td><img src="assets/images/1UfJS2g.jpg"  height="60" width="100" alt=""></td>
                                            <td>red hoops</td>
                                            <td>cosematic</td>
                                            <td>emma gilbert</td>
                                            <td>6</td>
                                            <td>$140</td>
                                            <td><button type="button" data-color="green" class="btn bg-green waves-effect">completed</button></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Jquery Core Js --> 

<?php
include('shared/scripts.php');
?>

</body>

</html>