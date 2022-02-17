<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sohure-শহুর</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">

</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">Sohure-শহুর</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item"><a href="index.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Home
                    </a></li>
                    <li class="tm-nav-item"><a href="posts.php" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        New Post
                    </a></li>
                    <li class="tm-nav-item"><a href="own.php" class="tm-nav-link">
                        <i class="fa fa-archive"></i>
                        Own
                    </a></li>
                    
                    <li class="tm-nav-item"><a href="profile.php" class="tm-nav-link">
                        <i class="fas fa-user"></i>
                        Profile
                    </a></li>
                    <li class="tm-nav-item active"><a href="notices.php" class="tm-nav-link">
                        <i class="fas fa-chalkboard"></i>
                        Notice Board
                    </a></li>
                    <li class="tm-nav-item"><a href="contact.php" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Contact
                    </a></li>
                    <li class="tm-nav-item"><a href="../logout.php" class="tm-nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                        Log Out
                    </a></li>
                </ul>
            </nav>
            <div class="tm-mb-65">
                <a href="https://facebook.com" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                 প্রকৃতির সর্বত্র আমাদের মাথা গলে না| এমন অনেক স্থান আছে যেখানে বুদ্ধি অন্ধকারে হাতড়াইয়া মরে, হৃদয় আপন আলোকে পথ দেখায়
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
<!--
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
-->
            <div class="col-lg-12 tm-mb-45">
                    <h2 class="text-center tm-color-primary tm-post-title mb-" style="font-weight:700; font-size:40px;">Notice Board</h2>
                    <hr class="text-center tm-hr-primary tm-mb-55">
            </div>
            
            
            
            
            
    
            
            <div class="row tm-mb-60">
                <?php 
                
                $conn = mysqli_connect('localhost', 'root', '', 'city');
                
                $ward_no = $_SESSION['ward_no'];
                $query="SELECT * FROM `notice` WHERE status = 'approved'AND ward_no IN ('0','{$ward_no}');";
                $get_notice = mysqli_query($conn, $query);

                if(!$get_notice){

                    die("Query Failed". mysqli_error($conn));

                }
                while($row=mysqli_fetch_assoc($get_notice)){

                    $notice_id=$row['notice_id'];
                    $topic=$row['topic'];
                    $info=$row['info'];
                    $date=$row['date'];
                    $author=$row['author'];
                    

                
                
                ?>
                
                <div class="col-lg-12 tm-mb-60 ">
                    <div class="media ">
                        <div class="media-body border p-4">
                            <h2 class="tm-color-primary tm-post-title mb-2"><?php echo $topic; ?></h2>
                            <h3 class=" mb-3" style="color:#666;"><?php echo $author; ?></h3>
                            <h3 class="tm-h3 mb-3"><?php echo $date; ?></h3>
                            <p class="mb-0 tm-line-height-short">
                                <?php echo $info; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
            </div>        
                  
            <footer class="col-lg-12 tm-mb-45">
                <hr class="col-12">
                <div class=" text-center tm-color-gray tm-copyright">
                    Copyright 2021 Sohure-শহুর
                </div>
            </footer>
        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
    

</body>
</html>