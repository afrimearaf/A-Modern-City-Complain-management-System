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
        @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

html {
  font-family: 'Montserrat', Arial, sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

body {
  background: #F2F3EB;
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, input, select, textarea {
  color: #5A5A5A;
  font: inherit;
  margin: 0;
}

input {
  line-height: normal;
}

textarea {
  overflow: auto;
}

#container {
  border: solid 3px #474544;
  max-width: 768px;
  margin: 60px auto;
  position: relative;
}

form {
  padding: 37.5px;
  margin: 50px 0;
}

h1 {
  color: #474544;
  font-size: 32px;
  font-weight: 700;
  letter-spacing: 7px;
  text-align: center;
  text-transform: uppercase;
}

.underline {
  border-bottom: solid 2px #474544;
  margin: -0.512em auto;
  width: 80px;
}

.icon_wrapper {
  margin: 50px auto 0;
  width: 100%;
}

.icon {
  display: block;
  fill: #474544;
  height: 50px;
  margin: 0 auto;
  width: 50px;
}

.email {
	float: right;
	width: 45%;
}

input[type='text'], [type='email'], [type='number'], [type='phone'], [type='password'],  select, textarea {
	background: none;
  border: none;
	border-bottom: solid 2px #474544;
	color: #474544;
	font-size: 1.000em;
  font-weight: 400;
  letter-spacing: 1px;
	margin: 0em 0 1.875em 0;
	padding: 0 0 0.875em 0;
  text-transform: uppercase;
	width: 100%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	-o-box-sizing: border-box;
	box-sizing: border-box;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

input[type='text']:focus, [type='email']:focus,[type='password']:focus, [type='phone']:focus, [type='number']:focus,  textarea:focus {
	outline: none;
	padding: 0 0 0.875em 0;
}

.message {
	float: none;
}

.name {
	float: left;
	width: 45%;
}

select {
  background: url('https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-arrow-down-32.png') no-repeat right;
  outline: none;
  -moz-appearance: none;
  -webkit-appearance: none;
}

select::-ms-expand {
  display: none;
}

.subject {
  width: 100%;
}

.telephone {
  width: 100%;
}

textarea {
	line-height: 150%;
	height: 150px;
	resize: none;
  width: 100%;
}

::-webkit-input-placeholder {
	color: #474544;
}

:-moz-placeholder { 
	color: #474544;
	opacity: 1;
}

::-moz-placeholder {
	color: #474544;
	opacity: 1;
}

:-ms-input-placeholder {
	color: #474544;
}

#form_button {
  background: none;
  border: solid 2px #474544;
  color: #474544;
  cursor: pointer;
  display: inline-block;
  font-family: 'Helvetica', Arial, sans-serif;
  font-size: 0.875em;
  font-weight: bold;
  outline: none;
  padding: 20px 35px;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	-ms-transition: all 0.3s;
	-o-transition: all 0.3s;
	transition: all 0.3s;
}

#form_button:hover {
  background: #474544;
  color: #F2F3EB;
}

@media screen and (max-width: 768px) {
  #container {
    margin: 20px auto;
    width: 95%;
  }
}

@media screen and (max-width: 480px) {
  h1 {
    font-size: 26px;
  }
  
  .underline {
    width: 68px;
  }
  
  #form_button {
    padding: 15px 25px;
  }
}

@media screen and (max-width: 420px) {
  h1 {
    font-size: 18px;
  }
  
  .icon {
    height: 35px;
    width: 35px;
  }
  
  .underline {
    width: 53px;
  }
  
  input[type='text'], [type='email'], select, textarea {
    font-size: 0.875em;
  }
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
                    <li class="tm-nav-item  active"><a href="posts.php" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        New Post
                    </a></li>
                    <li class="tm-nav-item"><a href="own.php" class="tm-nav-link">
                        <i class="fa fa-archive"></i>
                        Own
                    </a></li>
                    <li class="tm-nav-item active"><a href="about.php" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Profile
                    </a></li>
                    <li class="tm-nav-item"><a href="notices.php" class="tm-nav-link">
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
            
            <hr class="tm-hr-primary tm-mb-55">
            <div class="row tm-row tm-mb-40">
                <?php 
                
                    $conn = mysqli_connect('localhost', 'root', '', 'city');
                    if(isset($_POST['update'])){

                        $username=$_POST['user_name'];
                        $email=$_POST['email'];
                        $phone=$_POST['phone'];

                        $password=$_POST['password'];
                        $ward_no=$_POST['ward_no'];


                        $query= "UPDATE user SET `user_name` = '{$username}', `password` = '{$password}', `email` = '{$email}', `phone` = '{$phone}',`ward_no` = '{$ward_no}' WHERE user_id = '$db_user_id'";

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

                <div id="container">
                  <h1 class="mt-5">&bull; Update your Profile &bull;</h1>
                  <div class="underline">
                  </div>
                  <form class="p-5 m-5" action="" method="post" id="contact_form">
                    <div class="name">
                      <label for="name"></label>
                      <input disabled type="text" value="<?php echo $db_fname; ?>" name="name" id="name_input" required>
                    </div>
                    <div class="email">
                      <label for="email"></label>
                      <input type="email" value="<?php echo $db_email; ?>" name="email" id="email_input" required>
                    </div>
                      <div class="name">
                      <label for="user_name"></label>
                      <input type="text" value="<?php echo $db_username; ?>" name="user_name" id="user_name" required>
                    </div>
                    <div class="email">
                      <label for="password"></label>
                      <input type="password" value="<?php echo $db_password; ?>" name="password" id="password" required>
                    </div>
                    <div class="telephone">
                      <label for="phone"></label>
                      <input type="phone" value="<?php echo $db_phone; ?>" name="phone" id="phone" required>
                    </div>
                    <div class="telephone">
                      <label for="dob"></label>
                      <input disabled type="text" placeholder="Date of Birth" value="<?php echo $db_dob; ?>" name="dob" id="dob" required>
                    </div>
                    <div class="subject">
                      <label for="subject"></label>
                      <select placeholder="Position" name="subject" id="subject_input" required>
                        <option disabled hidden selected>Position</option>
                        <option >Citizen</option>
                        <option disabled>Councilor</option>
                        <option disabled>Mayor</option>
                      </select>
                    </div>
                      
                    <div class="telephone">
                      <label for="ward_no"></label>
                      <input type="number" placeholder="Ward No"  value="<?php echo $db_ward_no; ?>" name="ward_no" id="ward_no" required>
                    </div>
                    <div class="submit">
                      <input type="submit" name="update" value="Update" id="form_button" />
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