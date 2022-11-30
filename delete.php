<?php
    include('connect.php');
    
    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $query = mysqli_query($con, "delete from users_tbl where id = '$id'");

        if ($query){
            echo '<script>alert("Record Deleted")</script>';
            //exit();
            header('location:index1.php');
        }
    }
?>