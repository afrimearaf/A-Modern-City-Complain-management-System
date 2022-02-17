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
                        <li class="nav-item hidden-sm-down">
                            <h2 class=" mx-3 mt-3" style="color:white;">চট্টগ্রাম সিটি কর্পোরেশন</h2>
                        </li>
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
        <?php ?>
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
                                    aria-hidden="true"></i><span class="hide-menu">Users</span><span class="badge badge-light">7</span></a></li>
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
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <div class="text-end upgrade-btn">
                            <h4
                                class="text-gray">
                                <?php 
                    
                                    date_default_timezone_set('Asia/Dhaka');
                                    echo date('d-m-Y', time());
                                    echo "<br>";
                                    echo date('h:i:sa', time());
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                    $conn = mysqli_connect('localhost', 'root', '', 'city');
                                
                                    $query= "SELECT * FROM posts WHERE state  IN ('1','2', '3')";
                                    $select_all_posts= mysqli_query($conn,$query);
                                    $posts_count = mysqli_num_rows($select_all_posts);
                                
                                    $query= "SELECT * FROM posts WHERE state = 2";
                                    $select_all_progress= mysqli_query($conn,$query);
                                    $progress_count = mysqli_num_rows($select_all_progress);
                                
                                    $query= "SELECT * FROM posts WHERE state = 3";
                                    $select_all_solution= mysqli_query($conn,$query);
                                    $solution_count = mysqli_num_rows($select_all_solution);
                                
                                    $query2= "SELECT * FROM user";
                                    $select_all_users= mysqli_query($conn,$query2);
                                    $users_count = mysqli_num_rows($select_all_users);

                                    $query= "SELECT * FROM notice";
                                    $select_all_notice= mysqli_query($conn,$query);
                                    $notice_count = mysqli_num_rows($select_all_notice);
                                
                                    $query= "SELECT * FROM notice WHERE status = 'unapproved'";
                                    $select_all_notice= mysqli_query($conn,$query);
                                    $pending_notice_count = mysqli_num_rows($select_all_notice);
                                
                                
                                    $query= "SELECT * FROM contact";
                                    $select_all_contact= mysqli_query($conn,$query);
                                    $contact_count = mysqli_num_rows($select_all_contact);
                                ?>
                                <h4 class="card-title">Number of Posts</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i> <?php echo $solution_count; ?></h2>
                                    <span class="text-muted">Total Solved</span>
                                </div>
                                <span class="text-success"><?php echo $posts_count; ?>%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: <?php echo $posts_count; ?>%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Number of Ward</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-info"></i> <?php echo $users_count; ?></h2>
                                    <span class="text-muted">Total User</span>
                                </div>
                                <span class="text-info">42%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 42%; height: 6px;" aria-valuenow="25" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">System Statistics</h4>
                                <div class="flot-chart">
                                    <div class="flot-chart-content " 
                                        style="padding: 0px; position: relative;">
                                        <canvas class="flot-base w-100" height="400" id="myChart"></canvas>
                                                 <script>
                                                    const ctx = document.getElementById('myChart').getContext('2d');
                                                    const myChart = new Chart(ctx, {
                                                        type: 'bar',
                                                        data: {
                                                            labels: ['Posts','On Progress', 'Solved', 'User', 'Notice', 'Pending Notice',  'Contact'],
                                                            datasets: [{
//                                                                
                                                                data: [<?php echo $posts_count; ?>, <?php echo $progress_count; ?>, <?php echo $solution_count; ?>, <?php echo $users_count; ?>, <?php echo $notice_count; ?>, <?php echo $pending_notice_count; ?>, <?php echo $contact_count; ?>],
                                                                backgroundColor: [
                                                                    '#ff4444',
                                                                    '#ffbb33',
                                                                    '#00C851',
                                                                    '#33b5e5',
                                                                    '#2BBBAD',
                                                                    '#4285F4',
                                                                    '#aa66cc'
                                                                ]
                                                            }]
                                                        },
                                                        options: {
                                                            scales: {
                                                                y: {
                                                                    beginAtZero: true
                                                                }
                                                            }
                                                        }
                                                    });
                                                </script>
                                    </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex">
                                    <h4 class="card-title col-md-10 mb-md-0 mb-3 align-self-center">Projects of the Season</h4>
<!--
                                    <div class="col-md-2 ms-auto">
                                        <select class="form-select shadow-none col-md-2 ml-auto">
                                            <option selected>January</option>
                                            <option value="1">February</option>
                                            <option value="2">March</option>
                                            <option value="3">April</option>
                                        </select>
                                    </div>
-->
                                </div>
                                <div class="table-responsive mt-5">
                                    <table class="table stylish-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0" colspan="2">Assigned</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Budget</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 

                                                $conn = mysqli_connect('localhost', 'root', '', 'city');

                                                $query="SELECT * FROM posts WHERE state = 3";
                                                $get_solved_post = mysqli_query($conn, $query);

                                                if(!$get_solved_post){
                                                    die("Query Failed". mysqli_error($conn));
                                                }
                                                $i = 0;
                                                while($row=mysqli_fetch_assoc($get_solved_post)){
                                                    $i+=1;

                                                    $post_id=$row['post_id'];
                                                    $user_id=$row['user_id'];
                                                    $user_name=$row['user_name'];
                                                    $ward_no=$row['ward_no'];
                                                    $address=$row['address'];
                                                    $subject=$row['subject'];
                                                    $description=$row['description'];
                                                    $post_image=$row['post_image'];
                                                    $date=$row['date'];
                                                    $state=$row['state'];
                                            ?>
                                            <tr>
                                                <td style="width:50px;"><span class="round"><?php echo $i;?></span></td>
                                                <td class="align-middle">
                                                    <h6><?php echo $subject; ?></h6><small class="text-muted"><?php echo $address; ?></small>
                                                </td>
                                                <td class="align-middle">
                                                <?php
                                                    $sql ="SELECT * FROM `user` WHERE ward_no = '$ward_no' AND position = 'councilor'";
                                                    $get_coun_info = mysqli_query($conn, $sql);
                                                    while($row=mysqli_fetch_assoc($get_coun_info)){
                                                        $full_name = $row['full_name'];
                                                        echo $full_name;
                                                    }
                                                ?>
                                                </td>
                                                <td class="align-middle">
                                                <?php
                                                    $sql ="SELECT `budget` FROM `solution` WHERE post_id ='$post_id'";
                                                    $get_budget_info = mysqli_query($conn, $sql);
                                                    while($row=mysqli_fetch_assoc($get_budget_info)){
                                                        $budget = $row['budget'];
                                                        echo $budget;
                                                    }
                                                ?>/=</td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!-- Column -->
                    <?php 

                        $conn = mysqli_connect('localhost', 'root', '', 'city');

                        $query="SELECT * FROM posts WHERE state = 3 LIMIT 3";
                        $get_solved_post = mysqli_query($conn, $query);

                        if(!$get_solved_post){
                            die("Query Failed". mysqli_error($conn));
                        }
                        $i = 0;
                        while($row=mysqli_fetch_assoc($get_solved_post)){
                            $i+=1;

                            $post_id=$row['post_id'];
                            $user_id=$row['user_id'];
                            $user_name=$row['user_name'];
                            $ward_no=$row['ward_no'];
                            $address=$row['address'];
                            $subject=$row['subject'];
                            $description=$row['description'];
                            $post_image=$row['post_image'];
                            $date=$row['date'];
                            $state=$row['state'];
                        
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="../img/<?php echo $post_image; ?>" alt="Card">
                            <div class="card-body">
                                <ul class="list-inline d-flex align-items-center">
                                    <li class="ps-0"><?php echo $date; ?></li>
                                    <li class="ms-auto"><?php echo $ward_no; ?> No. Ward</li>
                                </ul>
                                <h3 class="font-normal"><?php echo $subject; ?></h3>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- Column -->
                    <!-- Column -->
<!--
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="./images/big/img2.jpg" alt="Card">
                            <div class="card-body">
                                <ul class="list-inline d-flex align-items-center">
                                    <li class="ps-0">20 May 2021</li>
                                    <li class="ms-auto"><a href="javascript:void(0)" class="link">3 Comment</a></li>
                                </ul>
                                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                            </div>
                        </div>
                    </div>
-->
                    <!-- Column -->
                    <!-- Column -->
<!--
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="./images/big/img4.jpg" alt="Card">
                            <div class="card-body">
                                <ul class="list-inline d-flex align-items-center">
                                    <li class="ps-0">20 May 2021</li>
                                    <li class="ms-auto"><a href="javascript:void(0)" class="link">3 Comment</a></li>
                                </ul>
                                <h3 class="font-normal">Featured Hydroflora Pots Garden &amp; Outdoors</h3>
                            </div>
                        </div>
                    </div>
-->
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
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="./plugins/flot/jquery.flot.js"></script>
    <script src="./plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>

</body>

</html>