<?php session_start(); ?>
<?php 

$conn = mysqli_connect('localhost', 'root', '', 'city');

if(isset($_POST['submit'])){
    
    $name=$_POST['username'];
    $pass=$_POST['password'];
    
    $query="SELECT * FROM user WHERE user_name ='{$name}'";
    $user_login = mysqli_query($conn, $query);

    if(!$user_login){
        
        die("Query Failed". mysqli_error($conn));
        
    }
    while($row=mysqli_fetch_assoc($user_login)){
        
        $user_id=$row['user_id'];
        $full_name=$row['full_name'];
        $user_name=$row['user_name'];
        $password=$row['password'];
        $email=$row['email'];
        $phone=$row['phone'];
        $dob=$row['dob'];
        $nid=$row['nid'];
        $ward_no=$row['ward_no'];
        $position=$row['position'];
        $status=$row['status'];
        
    }
    
    if($name !== $user_name && $pass !==  $password){
        
        header("Location: index.php");  
        
    }
    
    else if($name == $user_name && $pass ==  $password && $status == 'assigned' && $position  == 'mayor'){
        
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['full_name'] = $full_name;
        $_SESSION['password'] = $password;
        $_SESSION['position'] = $position;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['mid'] = $nid;
        $_SESSION['dob'] = $dob;
        $_SESSION['ward_no'] = $ward_no;
        $_SESSION['status'] = $status;

        header("Location: admin"); 
        
    }
    
    else if($name == $user_name && $pass ==  $password && $status == 'assigned' && $position  == 'citizen'){
        
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['full_name'] = $full_name;
        $_SESSION['password'] = $password;
        $_SESSION['position'] = $position;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['mid'] = $nid;
        $_SESSION['dob'] = $dob;
        $_SESSION['ward_no'] = $ward_no;
        $_SESSION['status'] = $status;

        header("Location: citizen"); 
            
        
    }
    else if($name == $user_name && $pass ==  $password && $status == 'assigned' && $position  == 'councilor'){
        
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['full_name'] = $full_name;
        $_SESSION['password'] = $password;
        $_SESSION['position'] = $position;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['mid'] = $nid;
        $_SESSION['dob'] = $dob;
        $_SESSION['ward_no'] = $ward_no;
        $_SESSION['status'] = $status;

        header("Location: councilor"); 
            
        
    }
    

    else{
        
        header("Location: index.php"); 

    }
        
}

?>