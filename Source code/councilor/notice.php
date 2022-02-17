<?php session_start(); ?>
<?php

//    $conn= mysqli_connect('localhost', 'root', '', 'car'); 
//
//    if(isset($_SESSION['user_name'])){
//        $username = $_SESSION['user_name'];
//        
//        $sql= "SELECT * FROM users WHERE user_name = '{$username}' ";
//        $profile= mysqli_query($connection, $sql);
//        
//        while($row=mysqli_fetch_array($profile)){
//        
//            $user_id=$row['user_id'];
//            $fname=$row['firstname'];
//            $lname=$row['lastname'];
//            $position=$row['position'];
//            $user_name=$row['user_name'];
//            $email=$row['email'];
//            $phone=$row['phone'];
//            $nid=$row['nid'];
//            $address=$row['address'];
//            $password=$row['password'];
//            $status=$row['status'];
//        }
//    }
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
                    <li class="tm-nav-item"><a href="index.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Home
                    </a></li>
                    <li class="tm-nav-item"><a href="track.php" class="tm-nav-link">
                        <i class="fas fa-thumbtack"></i>
                        Solution Track
                    </a></li>
                    <li class="tm-nav-item   active"><a href="notice.php" class="tm-nav-link">
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
                তোমার দেশ তোমার জন্য কি করেছে তা জিজ্ঞেস করো না, নিজেকে জিজ্ঞেস করো তুমি তোমার দেশের জন্য কি করতে পেরেছো।
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->          
            <div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <h2 class="text-center tm-color-primary tm-post-title tm-mb-40" style="font-size:40px;">আপনার বিজ্ঞপ্তি লিখুন</h2>
                </div>                
            </div>
            <div class="row tm-row tm-mb-120">
                <div class="col-12">
                    
                </div>
                <div class="col-lg-12 tm-contact-left">
                    <?php 
                    
                    $conn= mysqli_connect('localhost', 'root', '', 'city'); 
                    if(isset($_POST['submit'])){
                        $user_id = $_SESSION['user_id'];
                        $author = 'Counsilor';
                        $ward_no = $_SESSION['ward_no'];
                        $subject = $_POST['subject'];
                        $description = $_POST['description'];
                        
                        $query = "INSERT INTO `notice`(`topic`, `info`, `author`, `ward_no`, `date`) VALUES('{$subject}','{$description}','{$author}','{$ward_no}', now())";
                        
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
                    <form method="POST" action="notice.php" class="mb-5">
                        <div class="form-group row mb-4">
                            <label for="subject" class="col-sm-3 col-form-label text-right tm-color-primary">বিষয়:</label>
                            <div class="col-sm-9">
                                <input class="form-control mr-0 ml-auto" name="subject" id="subject" type="subject" required>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label for="description" class="col-sm-3 col-form-label text-right tm-color-primary">বিস্তারিত: </label>
                            <div class="col-sm-9">
                                <textarea class="form-control mr-0 ml-auto" name="description" id="description" rows="6" required></textarea>                                
                            </div>
                        </div>
                        <div class="form-group row text-right">
                            <div class="col-12">
                                <button class="tm-btn tm-btn-primary tm-btn-small" name="submit">জমা দিন</button>                   
                            </div>                            
                        </div>                                
                    </form>
                </div>
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