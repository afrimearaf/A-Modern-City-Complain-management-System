
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body id="log">
    <div >
        <div class="main">
            <p class="sign" align="center">Log in</p>
            <form class="form1" action="login.php" method="post">
                <input class="un " type="text" align="center" placeholder="Username" name="username">
                <input class="pass" type="password" align="center" placeholder="Password" name="password">
                <button type="submit" name="submit" class="submit">Log In</button> 
            </form>
            <p class="forgot" align="center">Doesn't have an account? <a href="signup.php"> Sign Up</a></p>          
        </div>
    </div>
</body>
</html>