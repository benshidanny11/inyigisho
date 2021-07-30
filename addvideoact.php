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


    $url_leason = $_POST['leason'];



    $sql = "INSERT INTO video_lessons_tbl(title,posted_by,description,video_url,done_on,year,month) 
                                          VALUES('$title','$postername','$description','$url_leason','$date','$year','$month')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Lesson was registered suceesfully!');
        location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
