<?php
include("displayerrors.php");
session_start();
if (!isset($_SESSION['uname'])) {
    header('location:login.php');
}

include("./api/dbconnect.php");

$query_videos = "Select * from video_lessons_tbl";

$leasons_result_videos = $conn->query($query_videos);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inyigisho</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="./assets/styles/inyigisho.css" />

  <link rel="stylesheet" href="./assets/styles/main.css" />
</head>

<body>


 
  <div class="container">
    <div class="container container-fluid">
     
     <?php
       include_once('header.php');
      ?>
      <div class="row mt-10">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-10">
               <h5>Video lessons</h5>
              </div>
              <div class="col-2">
               <div class="d-flex">

               
                <a href="addvideolesson.php" class="btn btn-primary" style="margin-left: 1.5rem;">
                  Add video lesson
                </a>
               </div>
              </div>
            </div>
          </div>
          <div class="card-body">

          <table id="example" class="table table-striped" style="width: 100%">
              <thead>
                <tr>
                  <th>Posted by</th>
                  <th>Leason description</th>
                  <th>Lesson link</th>
                  <th>Done on</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($leasons_result_videos->num_rows > 0) {
                  while ($row = $leasons_result_videos->fetch_assoc()) {

                    echo '<tr>
                            <td>' . $row['posted_by'] . '</td>
                            <td>' . $row['description'] . '</td>
                            <td>' . $row['video_url'] . '</td>
                            <td>' . $row['done_on'] . '</td>
                            <td>
                            <div class="d-flex"><a href="'. $row['video_url'] .'" class="btn btn-primary" target="blank">Watch</a>
                            <a href="deletevid.php?id=' . $row['id'] . '" class="btn btn-danger" style="margin-left:1rem;">Delete</a>
                             </div>
                            </td>
                           </tr>';
                  }
                }
                mysqli_close($conn);
                ?>
              </tbody>
            </table>


          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/git/jquery-git.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $("example").DataTable();
   
    });
  </script>
</body>

</html>