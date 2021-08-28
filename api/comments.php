<?php
include ("../displayerrors.php");
include("dbconnect.php");

$sql = "SELECT * FROM `comments` WHERE leason_id=".$_GET['lesid']." AND lesson_type='".$_GET['lesstype']."' AND status=1 ORDER BY id DESC";


$result = $conn->query($sql);
$json=[];
$rows = array();

if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {


   $json = $row;
   $rows['comments'][] = $row;
}
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