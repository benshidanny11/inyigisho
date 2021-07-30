<?php 
include("displayerrors.php");
include("./api/dbconnect.php");

 $quey="DELETE from video_lessons_tbl WHERE id=".$_GET['id'];
 if ($conn->query($quey) === TRUE) {
    echo "<script>alert('Leason was deleted suceesfully!');
location.href='index.php';</script>";
} else {
    echo "Error: " . $quey . "<br>" . $conn->error;
}