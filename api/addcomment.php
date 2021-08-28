<?php
 include("../displayerrors.php");
 include("dbconnect.php");

 $params = (array) json_decode(file_get_contents('php://input'), TRUE);



 if(isset($params['fullname'])||isset($params['leasonid'])||isset($params['comment'])||isset($params['lessontype'])){

 $leasonid=$params['leasonid'];
 $userfullname=$params['fullname'];
 $usercomment=$params['comment'];
 $lessontype=$params['lessontype'];
 $date = date("Y-m-d");


 $sql="INSERT INTO comments(leason_id,lesson_type,userfullname,comment,doneon) values('$leasonid','$lessontype','$userfullname','$usercomment','$date')";
 
    if ($conn->query($sql) === TRUE) {
        echo 'Comment was added suceesfully!';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 }else{
    echo 'Provide all required information!';
 }
 
?>
