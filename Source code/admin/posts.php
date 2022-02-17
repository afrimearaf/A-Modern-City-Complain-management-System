<?php session_start(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sohure-শহুর</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom CSS -->
<!--    <link rel="stylesheet" href="plugins/chartist/dist/chartist.min.css">-->
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
<!--
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
-->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
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
                                <img src="./images/users/mayor.jpg" alt="user" class="profile-pic me-2">
                                <?php echo $_SESSION['full_name']; ?>
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
                        <h3 class="page-title mb-0 p-0">Posts</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Posts</li>
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
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
<!--
                                <h4 class="card-title">Basic Table</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6>
-->
                                <div class="table-responsive">
                                    <table class="table user-table table-hover wrap table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">Post ID</th>
                                                <th class="border-top-0">User ID</th>
                                                <th class="border-top-0">Username</th>
                                                <th class="border-top-0">Ward No</th>
                                                <th class="border-top-0">Address</th>
                                                <th class="border-top-0">Category</th>
                                                <th class="border-top-0">Subject</th>
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0">Image</th>
                                                <th class="border-top-0">Date</th>
                                                <th class="border-top-0">State</th>
                                                <th class="border-top-0">Solution</th>
                                                <th class="border-top-0">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody style="overflow-x:hidden;">
                                            <?php 
                
                                                $conn = mysqli_connect('localhost', 'root', '', 'city');

                                                $query="SELECT * FROM posts WHERE state  IN ('1','2', '3') ORDER BY date ASC";
                                                $get_posts = mysqli_query($conn, $query);

                                                if(!$get_posts){
                                                    die("Query Failed". mysqli_error($conn));
                                                }
                                                while($row=mysqli_fetch_assoc($get_posts)){

                                                    $post_id=$row['post_id'];
                                                    $user_id=$row['user_id'];
                                                    $user_name=$row['user_name'];
                                                    $ward_no=$row['ward_no'];
                                                    $address=$row['address'];
                                                    $category=$row['category'];
                                                    $subject=$row['subject'];
                                                    $description=$row['description'];
                                                    $post_image=$row['post_image'];
                                                    $date=$row['date'];
                                                    $state=$row['state'];

                                           
                                            echo "<tr>";
                                                echo "<td>$post_id</td>"; 
                                                echo "<td>$user_id</td>"; 
                                                echo "<td>$user_name</td>"; 
                                                echo "<td>$ward_no</td>"; 
                                                echo "<td>$address</td>"; 
                                                $sql = "SELECT * FROM `category` WHERE category_id = '$category'";
                                                $get_category = mysqli_query($conn, $sql);
                                                while($row=mysqli_fetch_assoc($get_category)){
                                                    $category_name=$row['category_name'];
                                                    echo "<td>$category_name</td>";
                                                } 
                                                 
                                                echo "<td>$subject</td>"; 
                                                echo "<td>$description</td>"; 
                                                echo "<td><img src='../img/$post_image' alt='$post_image' width='150px'></td>"; 
                                                echo "<td>$date</td>"; 
                                                echo "<td>$state</td>"; 
                                                echo "<td><a href='permit.php?p_id={$post_id}'>Solution</a> </td>";
                                                echo "<td><a href='function.php?delete_post={$post_id}'>Delete</a> </td>";
                                             echo "<tr>";
                                            } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
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