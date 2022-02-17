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

    <style>
        .timeline{
          counter-reset: test 20;
          position: relative;
        }

        .timeline li{
          list-style: none;
          float: left;
          width: 25%;
          position: relative;
          text-align: center;
          text-transform: uppercase;
        }

        ul:nth-child(1){
          color: #09b6b6;
        }

        .timeline li:before{
          font-family: "Font Awesome 5 Free";
          content: '\f1ea';
          width: 50px;
          height: 50px;
          border: 3px solid #09b6b6;
          border-radius: 50%;
          display: block;
          text-align: center;
          line-height: 50px;
          margin: 0 auto 10px auto;
          background: #fff;
          color: #000;
          transition: all ease-in-out .3s;
          cursor: pointer;
        }

        .timeline li:after{
          content: "";
          position: absolute;
          width: 100%;
          height: 1px;
          background-color: grey;
          top: 25px;
          left: -50%;
          z-index: -999;
          transition: all ease-in-out .3s;
        }

        .timeline li:first-child:after{
          content: none;
        }
        .timeline li.active-tl{
          color: #555555;
        }
        .timeline li.active-tl:before{
          background: #09b6b6;
          color: #F1F1F1;
        }

        .timeline li.active-tl + li:after{
          background: #09b6b6;
        }
    </style>
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
                    <li class="tm-nav-item   active"><a href="track.php" class="tm-nav-link">
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
                    <h2 class="text-center tm-color-primary tm-post-title mb-" style="font-weight:700; font-size:40px;">Tracking the Solution</h2>
                    <hr class="text-center tm-hr-primary tm-mb-55">
            </div>
            
            
            
            <div class="row tm-mb-60">
                <?php 
                
                $conn = mysqli_connect('localhost', 'root', '', 'city');
                
                $coun_ward_no = $_SESSION['ward_no'];
                
                $query="SELECT * FROM posts WHERE ward_no = '$coun_ward_no'";
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
                    $post_image=$row['post_image'];
                    $date=$row['date'];
                    $states=$row['state'];
                    
                    if($states == '0') {
                        $state = "শুরু";
                    }
                    else if($states == '1') {
                        $state = "অনুমতির অপেক্ষায়";
                    }
                    else if($states == '2') {
                        $state = "কাজের তত্ত্বাবধানে";
                    }
                    else if($states == '3') {
                        $state = "সম্পন্ন";
                    }
                    

                    
                
                
                ?>
                
                <div class="col-lg-12 tm-mb-60 ">
                    <div class="media ">
                        <div class="media-body border p-4">
                            <a href="post.php?p_id=<?php echo $post_id; ?>" class="effect-lily tm-post-link tm-pt-20"><h2 class="tm-color-primary tm-post-title mb-2"><?php echo $subject; ?></h2></a>
                            <?php 
                    
                    
                            if($states == '0') {
                                
                                echo "
                                <ul class='timeline'>
                                    <li class='active-tl'>শুরু</li>
                                    <li>অনুমতির অপেক্ষায়</li>
                                    <li>কাজের তত্ত্বাবধান</li>
                                    <li>সম্পন্</li>
                                </ul>";
                            }
                            if($states == '1') {

                                echo "
                                <ul class='timeline'>
                                    <li>শুরু</li>
                                    <li class='active-tl'>অনুমতির অপেক্ষায়</li>
                                    <li>কাজের তত্ত্বাবধান</li>
                                    <li>সম্পন্</li>
                                </ul>";
                            }
                            if($states == '2') {

                                echo "
                                <ul class='timeline'>
                                    <li>শুরু</li>
                                    <li>অনুমতির অপেক্ষায়</li>
                                    <li class='active-tl'>কাজের তত্ত্বাবধান</li>
                                    <li>সম্পন্</li>
                                </ul>";
                            }
                            if($states == '3') {

                                echo "
                                <ul class='timeline'>
                                    <li>শুরু</li>
                                    <li>অনুমতির অপেক্ষায়</li>
                                    <li>কাজের তত্ত্বাবধান</li>
                                    <li class='active-tl'>সম্পন্</li>
                                </ul>";
                            }
                            
                            ?>
                              
                        </div>
                    </div>
                </div>
                <?php }  ?>
                
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