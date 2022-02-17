<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notice - Admin</title>
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
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <h3 class="page-title mb-0 p-0">Notice</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="notices.php">Notices</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Notice</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <a href="notices.php"
                                class="btn btn-outline-danger btn-lg d-none d-md-inline-block" target="_blank">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-2 col-md-3">
                        <div class="card">
<!--
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="./images/users/5.jpg"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2">Hanna Gover</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <i class="icon-people" aria-hidden="true"></i>
                                                <span class="font-normal">254</span>
                                            </a></div>
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <i class="icon-picture" aria-hidden="true"></i>
                                                <span class="font-normal">54</span>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
-->
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <?php 
                        $conn = mysqli_connect('localhost', 'root', '', 'city');
                        if(isset($_POST['submit'])){
                            $user_id = $_SESSION['user_id'];
                            $author = $_SESSION['position'];
                            $ward_no = $_SESSION['ward_no'];
                            $subject = $_POST['subject'];
                            $description = $_POST['description'];

                            $query = "INSERT INTO `notice`(`topic`, `info`, `author`, `ward_no`, `date`, `status`)VALUES('{$subject}','{$description}','{$author}','{$ward_no}', now(), 'unapproved')";

                            $create_notice_query= mysqli_query($conn,$query);

                            if(!$create_notice_query){
                                die("Query Failed". mysqli_error($conn));
                            }
                            else {
                                echo "
                                <div class='alert alert-success alert-dismissible'>
                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                  <strong>Success!</strong> Your notice has been published.
                                </div>";
                            }
                        }
                    ?>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" action="add_notice.php" method="post">
                                    <div class="form-group mt-3">
                                        <label class="col-md-12 mb-3 mt-3">Subject</label>
                                        <div class="col-md-12">
                                            <input type="text"
                                                class="form-control ps-0 form-control-line" name="subject">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3 mt-3"></div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label class="col-md-12 mb-3 mt-3">Description</label>
                                        <div class="col-md-12">
                                            <textarea name="description" rows="5" class="form-control ps-0 form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3"> 
                                        <div class="col-sm-12 d-flex">
                                            <button class="btn btn-outline-success btn-lg mx-auto mx-md-0  px-3 py-2" name="submit" style="text-transform:uppercase;">Submit</button>
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