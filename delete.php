<?php


include 'connection.php';

    $id=$_REQUEST['id'];
    $query="DELETE FROM `student_data` WHERE id=$id";

    if(mysqli_query($conn,$query)){
        mysqli_query($conn,"ALTER TABLE `student_data` AUTO_INCREMENT =1");
        header('Location: http://localhost/crud/allData.php');
        exit;
    }else{
        echo "query not run";
    }

    mysqli_close($conn);

?>  