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
                <h1 class="text-center">Sohure-শহুরে</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">
                <ul>
                    <li class="tm-nav-item  active"><a href="index.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Home
                    </a></li>
                    <li class="tm-nav-item"><a href="track.php" class="tm-nav-link">
                        <i class="fas fa-thumbtack"></i>
                        Solution Track
                    </a></li>
                    <li class="tm-nav-item"><a href="notice.php" class="tm-nav-link">
                        <i class="fas fa-file-signature"></i>
                        Notice Board
                    </a></li>
                    <li class="tm-nav-item"><a href="citizen_con.php" class="tm-nav-link">
                        <i class="fas fa-chalkboard"></i>
                        Citizen Contacts
                    </a></li>
                    <li class="tm-nav-item"><a href="profile.php" class="tm-nav-link">
                        <i class="far fa-user"></i>
                        Profile
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
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
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
                    <form method="post" action="search.php" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" name="search" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
-->
            <div class="row tm-row">
                
                <?php 
                
                $conn = mysqli_connect('localhost', 'root', '', 'city');
                $db_ward_no = $_SESSION['ward_no'];
                
                if(isset($_GET['category'])){
                    $category=$_GET['category'];
                }

                $sql= "SELECT * FROM `posts` WHERE category='$category' AND ward_no='$db_ward_no'";
                $category_sql= mysqli_query($conn,$sql);

                if (!$category_sql){
                    die("query failed!!".mysqli_error($conn));
                }
                $c = mysqli_num_rows($category_sql);
                if($c == 0){
                    echo "<h1 style='color:#333; text-align:center;'>উক্ত বিষয়ে কোনো সমস্যার বিবৃতি প্রকাশিত হয়নি</h1>";
                }
                else{
                    while($row=mysqli_fetch_assoc($category_sql)){

                        $post_id=$row['post_id'];
                        $user_name=$row['user_name'];
                        $ward_no=$row['ward_no'];
                        $address=$row['address'];
                        $subject=$row['subject'];
                        $description=$row['description'];
                        $category=$row['category'];
                        $post_image=$row['post_image'];
                        $date=$row['date'];
                    

                
                
                    ?>
  
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a href="post.php?p_id=<?php echo $post_id; ?>" class="effect-lily tm-post-link tm-pt-20">
                            <div class="tm-post-link-inner">
                                <img style="width 450px; height:300px;" src="img/<?php echo $post_image; ?>" alt="Image" class="img-fluid">
                            </div>
                            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?php echo $subject; ?></h2>
                        </a>                    
                        <p class="tm-pt-30">
                        <?php echo $description_lim=substr($description,0,250); ?>
                        </p>
                        <div class="d-flex justify-content-between tm-pt-45">
                            <span class="tm-color-primary"><?php echo $address; ?></span>
                            <span class="tm-color-primary"><?php echo $date; ?></span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>
                            <?php 
                                $sql="SELECT * FROM `category` WHERE category_id='$category'";
                                $get_category = mysqli_query($conn, $sql);
                                while($row=mysqli_fetch_assoc($get_category)){
                                    echo $row['category_name'];
                                } 
                            ?> 
                        </span>
                            <span> <?php echo $user_name; ?></span>
                        </div>
                    </article>

                <?php } } ?>

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