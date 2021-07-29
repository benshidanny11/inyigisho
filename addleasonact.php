<?php
include("displayerrors.php");
include("./api/dbconnect.php");

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $postername = $_POST['postersname'];

    $date = date("Y-m-d");
    $now = new \DateTime('now');
    $month = $now->format('m');
    $year = $now->format('Y');


    $file_leason = rand(1000, 100000) . "-" . $_FILES['leason']['name'];
    $file_leas_loc = $_FILES['leason']['tmp_name'];

    $file_featureimage = rand(1000, 100000) . "-" . $_FILES['featureimage']['name'];
    $file_feat_loc = $_FILES['featureimage']['tmp_name'];


    $folder_leason = "uploads/leasons/";
    $folder_feature = "uploads/featureimages/";

    if (move_uploaded_file($file_leas_loc, $folder_leason . $file_leason)) {

        if (move_uploaded_file($file_feat_loc, $folder_feature . $file_featureimage)) {
            $leasonurl = $folder_leason . $file_leason;
            $featureimageurl = $folder_feature . $file_featureimage;
            $sql = "INSERT INTO leasons_tbl(title,posted_by,leason_description,audio_url,done_on,year,month,featureimage_url) 
    VALUES('$title','$postername','$description','$leasonurl','$date','$year','$month','$featureimageurl')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Leason was registered suceesfully!');
    location.href='index.php';</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
