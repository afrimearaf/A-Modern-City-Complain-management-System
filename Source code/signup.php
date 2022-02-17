<?php 


$conn = mysqli_connect('localhost', 'root', '', 'city');
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $username=$_POST['username'];
    echo $email=$_POST['email'];
    $phone=$_POST['phone'];
    
    // $user_image=$_FILES['user_image']['name'];
    // $user_image_temp=$_FILES['user_image']['tmp_name'];
        
    $dob=$_POST['dob'];
    $nid = "pore dibo";
    $password=$_POST['password'];
    $ward_no=$_POST['ward_no'];


    
    
    
    // move_uploaded_file($user_image_temp, "../img/$user_image");
    
    
    $query= "INSERT INTO user(`full_name`, `user_name`, `password`, `email`, `phone`, `dob`, `nid`, `ward_no`, `position`, `status`) VALUES ( '{$name}', '{$username}', '{$password}', '{$email}', '{$phone}', '{$dob}', '{$nid}', '{$ward_no}', 'citizen', 'unassigned')";
    
    $create_user_query= mysqli_query($conn,$query);
    
        if(!$create_user_query){
                        die("Query Failed". mysqli_error($conn));
                    }
    
//     echo "Sign Up successful!!";
}






?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body id="sign">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="sign-card card">
                        <div class="card-body">
                            <p class="sign" align="center">Sign up</p>
                            <div class="m-sm-4">
                                
                                <form action="signup.php" method="post">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label>User Name</label>
                                        <input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your user name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input class="form-control form-control-lg" type="phone" name="phone" placeholder="Enter your phone number">
                                    </div>
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <input class="form-control form-control-lg" type="date" name="dob">
                                    </div>
                                    <div class="form-group">
                                        <label>Ward No.</label>
                                        <input class="form-control form-control-lg" type="number" name="ward_no" placeholder="Enter your ward no">
                                    </div>
                                    
                                     <div class="form-group">
                                        <label>NID</label>
                                        <input class="form-control form-control-lg" type="file" name="mid">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password">
                                    </div>
                                    <div class="text-center mt-3">
                                         <button type="submit" name="submit" class="sign_submit">Sign up</button> 
                                    </div>
                                </form>
                                <p class="forgot" align="center">Already have an account? <a href="index.php"> Log In </a></p>  
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>