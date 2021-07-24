<?php
include("displayerrors.php");
include "./api/dbconnect.php";
session_start();
if (isset($_POST['login'])) {

    $uname = $_POST['email'];
    $password = $_POST['password'];

    if ($uname != "" && $password != "") {

        $sql_query = "SELECT  count(*) as cntUser from users where user_name ='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
            header('Location: index.php');
        } else {
            echo "<script>alert('Incorrect login data!');
                  location.href='login.php';</script>";
        }
    }
} else {
    echo "<script>alert('Incomplete login data!');
    location.href='login.php';</script>";
}

?>