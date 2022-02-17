<?php session_start(); ?>

<?php 
                
    $conn = mysqli_connect('localhost', 'root', '', 'city');

    if(isset($_GET['p_id'])){
        $the_post_id=$_GET['p_id'];
    }

    $query="SELECT * FROM posts WHERE post_id = '$the_post_id'";
    $get_posts = mysqli_query($conn, $query);

    if(!$get_posts){

        die("Query Failed". mysqli_error($conn));

    }
    while($row=mysqli_fetch_assoc($get_posts)){

        $post_id=$row['post_id'];
        $user_name=$row['user_name'];
        $ward_no=$row['ward_no'];
        $address=$row['address'];
        $subject=$row['subject'];
        $description=$row['description'];
        $category=$row['category'];
        $post_image=$row['post_image'];
        $date=$row['date'];


    }
    $sql="SELECT * FROM `category` WHERE category_id='$category'";
    $get_category = mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($get_category)){
        $category_name = $row['category_name'];
    }


   

?>
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
                দেশপ্রেম হৃদয়ের জিনিস। একজন মানুষ দেশপ্রেমিক যদি তার হৃদয় তার দেশের প্রতি সত্যবাদী হয়। সর্বদা দেশের প্রতি আনুগত্য। সরকারের প্রতি আনুগত্য, যখন এটি প্রাপ্য।
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
<!--
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
-->
                </div>                
            </div>            
            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <img src="img/<?php echo $post_image; ?>" width="100%" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">                    
                        <div class="mb-4">
                            <h2 class="pt-2 tm-color-primary tm-post-title"><?php echo $subject; ?></h2>
                            <h4 class="pt-2 tm-color-gray "><?php echo $category_name; ?></h4>
                            <p class="tm-mb-40"><?php echo $date; ?></p>
                            <p>
                                <?php echo $description; ?>
                            </p>
                            <span class="d-block text-right tm-color-primary"><?php echo $user_name; ?> </span>
                        </div>
                        
                        <!-- Comments -->
                        <div>
                            <h2 class="tm-color-primary tm-post-title">সমাধানের জন্য মেয়রকে জানান</h2>
                            <hr class="tm-hr-primary tm-mb-45">
                            <?php 
                            
                             if(isset($_POST['request'])){
                                $recommendation = $_POST['recommendation'];


                                $query2 = "INSERT INTO `solution`(`post_id`, `ward_no`,`recommendation`) VALUES ('{$post_id}','{$ward_no}','{$recommendation}')";

                                $solution_query= mysqli_query($conn,$query2);

                                if(!$solution_query){
                                    die("Query Failed". mysqli_error($conn));
                                }
                                else {
                                    echo "
                                    <div class='alert alert-success'>
                                      <strong>Success!</strong> Your recommendation has been submitted.
                                    </div>";
                                }
                                 
                                 
                                $query3 = "UPDATE `posts` SET state = 1 WHERE post_id = '$post_id'";
                                $state_query= mysqli_query($conn,$query3);
                                 
                                if(!$state_query){
                                    die("Query Failed". mysqli_error($conn));
                                }
                            }
                            
                            ?>
                            <form action="" method="POST" class="mb-5 tm-comment-form">

                                <div class="mb-4">
                                    <textarea class="form-control" name="recommendation" rows="6"></textarea>
                                </div>
                                <div class="text-right">
                                    <button class="tm-btn tm-btn-primary tm-btn-small" name="request">Submit</button>                        
                                </div>                                
                            </form>                          
                        </div>
                    </div>
                </div>
                <aside class="col-lg-4 tm-aside-col">
                    <div class="tm-post-sidebar">
                        <hr class="mb-3 tm-hr-primary">
                        <h2 class="text-center tm-mb-40 tm-post-title tm-color-primary">MESSAGE FROM MAYOR</h2>
                        <span class="d-block tm-mb-40">
                            <figure>
                                <img width="100%" src="img/mayor.jpg" alt="Image" class="mb-3 img-fluid">
                                <figcaption class="text-center tm-color-primary">Md. Rezaul Karim Chowdhury</figcaption>
                                <h5 class="text-center">Mayor</h5>
                                <h6 class="text-center">Chattogram City Corporation</h6>
                                <p class="text-center">My objective is to fulfil the dream of Bangabandhu through building a hunger- and poverty-free Golden Bangladesh being imbued with the spirit of the War of Liberation.</p>
                            </figure>
                        </span>
                        <hr class="mb-3 tm-hr-primary">
                    </div>                    
                </aside>
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