<?php session_start(); ?>
<?php

    $conn= mysqli_connect('localhost', 'root', '', 'city'); 

    if(isset($_SESSION['user_id'])){
        $session_id = $_SESSION['user_id'];
        
        $sql= "SELECT * FROM user WHERE user_id = $session_id";
        $profile= mysqli_query($conn, $sql);
        
        while($row=mysqli_fetch_array($profile)){
        
            $db_user_id=$row['user_id'];
            $db_fname=$row['full_name'];
            $db_username=$row['user_name'];
            $db_email=$row['email'];
            $db_phone=$row['phone'];
            $db_password=$row['password'];
            $db_nid=$row['nid'];
            $db_dob=$row['dob'];
            $db_ward_no=$row['ward_no'];
            $db_position=$row['position'];
        }
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sohure-শহুর</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="index.php">
                        <b class="logo-icon">
                            <img src="./images/logo_cc.png" alt="Admin" class="dark-logo" />
                        </b>
                        <span class="logo-text">
                            <img src="./images/cc.png" alt="Admin" class="dark-logo" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav me-auto mt-md-0 ">

<!--
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
-->
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="./images/users/mayor.jpg" alt="user" class="profile-pic me-2"><?php echo $_SESSION['full_name']; ?>
                            </a>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i class="me-3  far fa-gem fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="posts.php" aria-expanded="false"><i class="me-3 fa fa-table"
                                    aria-hidden="true"></i><span class="hide-menu">Posts</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="category.php" aria-expanded="false"><i class="me-3 fa fa-th-list"
                                    aria-hidden="true"></i><span class="hide-menu">Categories</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="notices.php" aria-expanded="false">
                                <i class="me-3 far fa-window-maximize" aria-hidden="true"></i><span
                                    class="hide-menu">Notices</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="permits.php" aria-expanded="false"><i class="me-3 fas fa-clipboard-check"
                                    aria-hidden="true"></i><span class="hide-menu">Permits</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="users.php" aria-expanded="false"><i class="me-3 fa fa-users"
                                    aria-hidden="true"></i><span class="hide-menu">Users</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="contacts.php" aria-expanded="false"><i class="me-3 fas fa-inbox"
                                    aria-hidden="true"></i><span class="hide-menu">Messages</span></a></li>
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="profile.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i><span
                                    class="hide-menu">Profile</span></a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="../logout.php"
                                class="btn btn-danger text-white mt-4" target="_blank">Log Out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Profile</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
<!--
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="https://www.wrappixel.com/templates/monsteradmin/"
                                class="btn btn-success d-none d-md-inline-block text-white" target="_blank">Upgrade to
                                Pro</a>
                        </div>
                    </div>
-->
                </div>
            </div>
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="./images/users/mayor.jpg"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2"><?php echo $_SESSION['full_name']; ?></h4>
                                    <h6 class="card-subtitle">Chittagong City Corporation</h6>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <i class="icon-people" aria-hidden="true"></i>
                                                <span class="font-normal"><?php echo $_SESSION['position']; ?></span>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <?php 
                
                                    $conn = mysqli_connect('localhost', 'root', '', 'city');
                                    if(isset($_POST['update'])){

                                        $name=$_POST['name'];
                                        $username=$_POST['user_name'];
                                        $email=$_POST['email'];
                                        $phone=$_POST['phone'];
                                        $position=$_POST['position'];
                                        $password=$_POST['password'];


                                        $query= "UPDATE user SET `full_name`='{$name}', `user_name` = '{$username}', `password` = '{$password}', `email` = '{$email}', `phone` = '{$phone}' ,`position`= '{$position}' WHERE user_id = '$db_user_id'";

                                        $update_user_query= mysqli_query($conn,$query);

                                            if(!$update_user_query){
                                                            die("Query Failed". mysqli_error($conn));
                                                        }
                                            else {
                                                echo "
                                                    <div class='alert alert-success'>
                                                      <strong>Success!</strong> Your profile has been updated.
                                                    </div>";
                                            }
                                        }

                                    ?>
                                <form class="form-horizontal form-material mx-2" action="" method="post">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $db_fname; ?>" name="name"
                                                class="form-control ps-0 form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" value="<?php echo $db_email; ?>" name="email"
                                                class="form-control ps-0 form-control-line" 
                                                id="example-email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">User Name</label>
                                        <div class="col-md-12">
                                            <input type="text" value="<?php echo $db_username; ?>" name="user_name"
                                                class="form-control ps-0 form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="<?php echo $db_password; ?>" name="password" 
                                                class="form-control ps-0 form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="phone" value="<?php echo $db_phone; ?>" name="phone" id="phone" required
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Date of birth</label>
                                        <div class="col-md-12">
                                            <input type="date" value="<?php echo $db_dob; ?>" name="dob" id="dob" required
                                                class="form-control ps-0 form-control-line" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Position</label>
                                        <div class="col-sm-12 border-bottom">
                                            <select class="form-select shadow-none border-0 ps-0 form-control-line"  name="position" required>
                                                <option disabled hidden selected>Position</option>
                                                <option value="citizen">Citizen</option>
                                                <option value="councilor">Councilor</option>
                                                <option value="mayor">Mayor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Ward No</label>
                                        <div class="col-md-12">
                                            <input type="number" value="<?php echo $db_ward_no; ?>" name="ward_no" id="ward_no" required
                                                class="form-control ps-0 form-control-line" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button class="btn btn-outline-success btn-lg mx-auto mx-md-0  px-3 py-2" name="update">Update
                                                Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>
    </div>
    <script src="./plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="./plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>