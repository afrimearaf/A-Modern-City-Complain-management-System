<?php 
                            
$conn= mysqli_connect('localhost', 'root', '', 'city'); 
if(isset($_POST['submit'])){
    $recommendation = $_POST['recommendation'];

    $query2 = "INSERT INTO `solution`(`post_id`, `budget`, `start_time`, `end_time`, `ward_no`, `recommendation`) VALUES ('{$the_post_id}','0','now()','now()','{$ward_no}','{$recommendation}')";

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
}

?>