<?php 
include("displayerrors.php");
include("./api/dbconnect.php");

 $quey="UPDATE comments SET status=1 WHERE id=".$_GET['id'];
 if ($conn->query($quey) === TRUE) {
    echo "<script>alert('Comment was approved suceesfully!');
    window.history.back();</script>";
} else {
    echo "Error: " . $quey . "<br>" . $conn->error;
}