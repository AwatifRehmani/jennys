
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.php"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/images/profile.jpg" alt="User"></a>
                    <div class="detail">
                        <h4><?php echo @$_SESSION['fname'];  ?></h4>
                        <small> <?php
                        echo "<h6>" .@$_SESSION['email']." </h6> "; 
                        ?></small>     
                    
                    </div>
                </div>
            </li>
            <li><a href="index.php"><i class="zmdi zmdi-home"></i><span>Home Page</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account"></i><span>users</span></a>
                <ul class="ml-menu">
                    <li><a href="create.php">Orders</a></li>
                   
                    <li><a href="list.php">products</a></li>  
                    
                    <li><a href="login.php">users</a></li>                     
                </ul>
            </li>
           
            <l
        </ul>
    </div>
</aside>