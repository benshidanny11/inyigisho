<?php
 include("../displayerrors.php");
 include("dbconnect.php");

 $params = (array) json_decode(file_get_contents('php://input'), TRUE);



 if(isset($params['fullname'])||isset($params['leasonid'])||isset($params['comment'])){

 $leasonid=$params['leasonid'];
 $userfullname=$params['fullname'];
 $usercomment=$params['comment'];
 $date = date("Y-m-d");


 $sql="INSERT INTO comments(leason_id,userfullname,comment,doneon) values('$leasonid','$userfullname','$usercomment','$date')";
 
    if ($conn->query($sql) === TRUE) {
        echo 'Comment was added suceesfully!';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 }else{
    echo 'Provide all required information!';
 }
 
?>
