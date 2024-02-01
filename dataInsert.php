<?php
include 'connection.php';

$name = $_REQUEST['stuName'];
$addres = $_REQUEST['stuAddres'];
$phone = $_REQUEST['stuPhone'];
$image = $_FILES['stuImage'];

$file_name = $_FILES['stuImage']['name'];
$file_temp = $_FILES['stuImage']['tmp_name'];


$imgPath='student_images/';

$query = "INSERT INTO `student_data` (`stu_name`, `stu_addres`, `stu_phone`,`stu_image`) 
VALUES ('$name', '$addres', '$phone','$file_name'),";

if (mysqli_query($conn, $query)) {
    if (move_uploaded_file($file_temp, $imgPath . $file_name)) {
        echo "file is uploaded";
        header('Location: http://localhost/crud/allData.php');
        exit;
    } else {
        echo "file not submitted";
    }
} else {
    echo "query not run please check your query...";
}

mysqli_close($conn);
?>

