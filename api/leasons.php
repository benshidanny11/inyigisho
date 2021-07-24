<?php
include ("../displayerrors.php");
include("dbconnect.php");

$sql = 'SELECT * FROM `leasons_tbl`';
//$result = mysqli_query($conn, $query);
//$row = mysqli_fetch_array($result);
$result = $conn->query($sql);
$json=[];
$rows = array();
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {

   $json = $row;
   $rows['lesons'][] = $row;
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
