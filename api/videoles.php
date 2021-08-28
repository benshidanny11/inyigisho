<?php
include ("../displayerrors.php");
include("dbconnect.php");

$now = new \DateTime('now');
$month = $now->format('m');
$year = $now->format('Y');


$sql = 'SELECT * FROM `video_lessons_tbl` WHERE year='.$year.' ORDER BY id DESC';
//$result = mysqli_query($conn, $query);
//$row = mysqli_fetch_array($result);
$result = $conn->query($sql);
$rows = array();
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
   $commentcountsql="SELECT Count(*) as ccount from comments where leason_id=".$row['id']." and lesson_type='video' and status=1";
   $result_count = $conn->query($commentcountsql);
   $row_count = $result_count->fetch_assoc();
   $row['comment_count']=$row_count['ccount'];
   $rows['videolesons'][] = $row;
}
http_response_code(200);
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
echo json_encode($rows);
}else{
   http_response_code(404);
   $messageRes=Array(
      'status'=>404,
      'message'=>'No data found'
   );
   echo json_encode($messageRes);
}

$conn -> close();

?>
