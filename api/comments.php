<?php
include ("../displayerrors.php");
include("dbconnect.php");


$sql = 'SELECT * FROM `comments` where leason_id='.$_GET['lesid'];
//$result = mysqli_query($conn, $query);
//$row = mysqli_fetch_array($result);
$result = $conn->query($sql);
$json=[];
$rows = array();
while ($row = $result->fetch_assoc()) {

   $json = $row;
   $rows['comments'][] = $row;
}
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
echo json_encode($rows);

$conn -> close();

?>