<?php 
include("displayerrors.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inyigisho::login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/styles/inyigisho.css" />

    <link rel="stylesheet" href="./assets/styles/main.css" />
    <style>
        /* .txts {
            font-family: "Open Sans", sans-serif !important;
            font-size: 1.5rem !important;
        } */
    </style>

</head>

<body>
    <header id="page-top">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-12 text-center">
                    <h2 class="title">Inyigisho</h2>
                    <hr class="star-primary" />
                </div>
            </div>
        </div>
    </header>


    <!-- <div class="content-wrapper"> -->
    <div class="container">

        <div class="login-form">
            <form action="loginaction.php" method="post">
                <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
                <h4 class="modal-title">Login here</h4>
                <div class="form-group ">
                    <input type="text" class="form-control txts" placeholder="User name/Email" name="email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control txts" placeholder="Password" name="password" required="required">
                </div>
                <input type="submit" class="btn btn-primary w-100" name="login" value="Login">
            </form>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   

  
    <script type="text/javascript">
        // $(document).ready(function() {



        // });
    </script>
</body>
</body>

</html>