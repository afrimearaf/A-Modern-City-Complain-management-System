<?php session_start(); ?>
<?php
    $_SESSION['user_id'] = null;
    $_SESSION['user_name'] = null;
    $_SESSION['full_name'] = null;
    $_SESSION['password'] = null;
    $_SESSION['position'] = null;
    $_SESSION['email'] = null;
    $_SESSION['phone'] = null;
    $_SESSION['mid'] = null;
    $_SESSION['dob'] = null;
    $_SESSION['ward_no'] = null;
    $_SESSION['status'] = null;

    header("Location: ./index.php");
//echo "logged out";

?>