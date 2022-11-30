<?php
    include('connect.php');

    $search = $_GET['search'];

    $query = mysqli_query($con, "select * from users_tbl where (firstname LIKE '%".$search. "%') OR (lastname LIKE '%".$search."%')");

    if(mysqli_num_rows($query)){
        while($result = mysqli_fetch_array($query)){
            
        }
    }
?>
