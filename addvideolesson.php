<?php
include("displayerrors.php");
session_start();
if (!isset($_SESSION['uname'])) {
    header('location:login.php');
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inyigisho</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/styles/inyigisho.css" />

  <link rel="stylesheet" href="./assets/styles/main.css" />
</head>

<body>
  <div class="container">
    <div class="container container-fluid">
      <div class="header">
        <div class="row">
          <div class="col-10">
            <a href="index.php" class="linkhome">
              <h1>Inyigisho dashboard</h1>
            </a>
          </div>
          <div class="col-2">
            <a href="login.php" class="btn btn-primary">Log me out</a>
          </div>
        </div>
      </div>
      <div class="row mt-10">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-10">
               <h3>Add video lesson</h3>
              </div>
              <div class="col-2">
                <a href="index.php" class="btn btn-primary">
                  Back to home
                </a>
              </div>
            </div>
          </div>
          <div class="card-body">
          <div class="alert alert-light martop" role="alert">
              <form action="addvideoact.php" method="post" enctype="multipart/form-data">

               
                <div class="form-group mt-3">
                  <label for="advicetitle" class="lbl-form">Lesson video link</label>
                  <input type="text" class="form-control txt mt-2" placeholder="Paste video link here" name="leason" />
                </div>
                <div class="form-group mt-2">
                  <label for="advicetitle" class="lbl-form">Lesson title</label>
                  <input type="text" class="form-control txt mt-2" placeholder="Enter title of leason" name="title" required />
                </div>

                <div class="form-group mt-2">
                  <label for="advicetitle" class="lbl-form">Lesson description</label>
                  <textarea class="form-control txt mt-2" placeholder="Enter leason description" name="description" rows="5" required ></textarea>
                </div>

                <div class="form-group mt-2">
                  <label for="advicetitle" class="lbl-form">Poster name</label>
                  <input type="text" class="form-control txt mt-2" placeholder="Enter your name" name="postersname" required />
                </div>

                <div class="modal-footer mt-4">
                  <button type="submit" class="btn btn-primary btn" name="submit">
                    Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/git/jquery-git.min.js"></script>

 
</body>

</html>