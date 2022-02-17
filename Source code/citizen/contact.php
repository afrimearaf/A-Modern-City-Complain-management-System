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
                    <li class="tm-nav-item "><a href="index.php" class="tm-nav-link">
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
                    <li class="tm-nav-item"><a href="notices.php" class="tm-nav-link">
                        <i class="fas fa-chalkboard"></i>
                        Notice Board
                    </a></li>
                    <li class="tm-nav-item  active"><a href="contact.php" class="tm-nav-link">
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
            <div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <div class="gmap_canvas"> <!-- Google Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.2452352803916!2d91.81204941534631!3d22.34436724693945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad275c1e17be6b%3A0x3800d2f36b60300c!2sChattogram%20City%20Corporation!5e0!3m2!1sen!2sbd!4v1637697024270!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>                
            </div>
            <div class="row tm-row tm-mb-120">
                <div class="col-12">
                    <h2 class="tm-color-primary tm-post-title tm-mb-60">যোগাযোগ </h2>
                </div>
                <div class="col-lg-5 tm-contact-left">
                    <address class="mb-4 tm-color-gray">
                        ঠিকানা: বাটালী হিল, নগর ভবন, টাইগার পাস রোড, চট্টগ্রাম
                    </address>
                    <span class="d-block">
                        টেলিফোন:
                        <a href="tel:060-070-0980" class="tm-color-gray">+88031616501</a>
                    </span>
                    <span class="mb-4 d-block">
                        ইমেইল:
                        <a href="http://www.ccc.org.bd/" class="tm-color-gray">http://www.ccc.org.bd/</a>
                    </span>
                    <p class="mb-5 tm-line-height-short">
                        চট্টগ্রাম সিটি কর্পোরেশন এলাকা 160.99 বর্গ কিমি, 22°13' এবং 22°27' উত্তর অক্ষাংশ এবং 91°40' এবং 91°53' পূর্ব দ্রাঘিমাংশের মধ্যে অবস্থিত। সীমানা: উত্তরে সীতাকুণ্ড, হাটহাজারী ও রাউজান উপজেলা, দক্ষিণে আনোয়ারা উপজেলা, পূর্বে রাউজান ও বোয়ালখালী উপজেলা, পশ্চিমে সীতাকুণ্ড উপজেলা ও বঙ্গোপসাগর।
                    </p>
                </div>
                <div class="col-lg-7  tm-contact-right">
                    <?php 
                    
                    $conn= mysqli_connect('localhost', 'root', '', 'city'); 
                    if(isset($_POST['submit'])){
                        $user_id = $_SESSION['user_id'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        $ward_no = $_SESSION['ward_no'];
                        $author = $_SESSION['position'];
                        
                        $query = "INSERT INTO contact(user_id, subject, message, ward_no, author, date) VALUES ('{$user_id}','{$subject}','{$message}','{$ward_no}','{$author}',now())";
                        
                        $contact_query= mysqli_query($conn,$query);
    
                        if(!$contact_query){
                            die("Query Failed". mysqli_error($conn));
                        }
                        else {
                            echo "
                            <div class='alert alert-success'>
                              <strong>Success!</strong> Your message has been submitted.
                            </div>";
                        }
                    }
                    
                    ?>
                    <form method="POST" action="" class="mb-5  mr-0 tm-contact-form">   
                        <div class="form-group row mb-4">
                            <label for="subject" class="col-sm-3 col-form-label text-right tm-color-primary">বিষয়:</label>
                            <div class="col-sm-9">
                                <input class="form-control mr-0 ml-auto" name="subject" id="subject" type="text" required>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label for="message" class="col-sm-3 col-form-label text-right tm-color-primary">বার্তা:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control mr-0 ml-auto" name="message" id="message" rows="8" required></textarea>                                
                            </div>
                        </div>
                        <div class="form-group row text-right">
                            <div class="col-12">
                                <button class="tm-btn tm-btn-primary tm-btn-small" name="submit">Submit</button>                        
                            </div>                            
                        </div>                                
                    </form>
                    <ul class="tm-social-links">
                        <li class="mb-2">
                            <a href="https://facebook.com" class="d-flex align-items-center justify-content-center">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://twitter.com" class="d-flex align-items-center justify-content-center">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://youtube.com" class="d-flex align-items-center justify-content-center">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="https://instagram.com" class="d-flex align-items-center justify-content-center mr-0">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
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