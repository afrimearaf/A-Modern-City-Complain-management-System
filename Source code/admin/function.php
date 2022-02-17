<?php 

$conn = mysqli_connect('localhost', 'root', '', 'city');

//approve notice

if(isset($_GET['approve'])){
    $notice=$_GET['approve'];
    
    $query="UPDATE notice SET status='approved' WHERE notice_id= {$notice} ";
    $approve_query= mysqli_query($conn,$query);
    
    if(!$approve_query){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='notices.php';
        </script>";
    }
}

//unapprove notice

if(isset($_GET['unapprove'])){
    $notice=$_GET['unapprove'];
    
    $query="UPDATE notice SET status='unapproved' WHERE notice_id= {$notice} ";
    $unapprove_query= mysqli_query($conn,$query);
    
    if(!$unapprove_query){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='notices.php';
        </script>";
    }
}

//Delete notice

if(isset($_GET['delete_notice'])){
    $notice=$_GET['delete_notice'];
    
    $query="DELETE FROM notice WHERE notice_id= {$notice}";
    $delete_notice= mysqli_query($conn,$query);
    if(!$delete_notice){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='notices.php';
        </script>";
    }
}


//Delete Post

if(isset($_GET['delete_post'])){
    $post=$_GET['delete_post'];
    
    $query="DELETE FROM posts WHERE post_id= {$post}";
    $delete_post_query= mysqli_query($conn,$query);
    if(!$delete_post_query){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='posts.php';
        </script>";
    }
}

//make position citizen 

if(isset($_GET['citizen'])){
    $citizen=$_GET['citizen'];
    
    $query="UPDATE user SET position='citizen' WHERE user_id= {$citizen} ";
    $citizen_query= mysqli_query($conn,$query);
    
    if(!$citizen_query){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='users.php';
        </script>";
    }
}

//make position councilor 

if(isset($_GET['councilor'])){
    $councilor=$_GET['councilor'];
    
    $query="UPDATE user SET position='councilor' WHERE user_id= {$councilor} ";
    $councilor_query= mysqli_query($conn,$query);
    
    if(!$councilor_query){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='users.php';
        </script>";
    }
}

//Assign user

if(isset($_GET['assign'])){
    $assign=$_GET['assign'];
    
    $query="UPDATE user SET status='assigned' WHERE user_id= {$assign} ";
    $assign_query= mysqli_query($conn,$query);
    
    if(!$assign_query){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='users.php';
        </script>";
    }
}

//Unassign user

if(isset($_GET['unassign'])){
    $unassign=$_GET['unassign'];
    
    $query="UPDATE user SET status='unassigned' WHERE user_id= {$unassign} ";
    $unassign_query= mysqli_query($conn,$query);
    
    if(!$unassign_query){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='users.php';
        </script>";
    }
}

//Remove User

if(isset($_GET['remove_user'])){
    $remove_user=$_GET['remove_user'];
    
    $query="DELETE FROM `user` WHERE user_id = {$remove_user}";
    $remove_user_query= mysqli_query($conn,$query);
    if(!$remove_user_query){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='users.php';
        </script>";
    }
}

//Solution done

if(isset($_GET['per_id'])){
    $post_permit_id=$_GET['per_id'];
    
    $query="SELECT * FROM solution WHERE solution_id = '$post_permit_id'";
    $get_sols = mysqli_query($conn, $query);

    if(!$get_sols){
        die("Query Failed". mysqli_error($conn));
    }
    while($row=mysqli_fetch_assoc($get_sols)){
        $post_id=$row['post_id'];
    }
    
    $query3 = "UPDATE `posts` SET state = 3 WHERE post_id = {$post_id}";
    $state_query= mysqli_query($conn,$query3);

    if(!$state_query){
        die("Query Failed". mysqli_error($conn));
    }
    else {
        echo"<script>
        window.location.href='permits.php';
        </script>";
    }
}

//Remove Category

if(isset($_GET['delete_category'])){
    $delete_category=$_GET['delete_category'];
    
    $query="DELETE FROM `category` WHERE category_id = {$delete_category}";
    $delete_category_query= mysqli_query($conn,$query);
    if(!$delete_category_query){

        die("Query Failed". mysqli_error($conn));

    }
    else {
        echo"<script>
        window.location.href='category.php';
        </script>";
    }
}



?>