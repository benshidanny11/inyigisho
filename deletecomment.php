<?php 
include("displayerrors.php");
include("./api/dbconnect.php");

 $quey="DELETE from comments WHERE id=".$_GET['id'];
 if ($conn->query($quey) === TRUE) {
    echo "<script>alert('Comment was deleted suceesfully!');
    window.history.back();</script>";
} else {
    echo "Error: " . $quey . "<br>" . $conn->error;
}
