<?php require_once 'header.php'?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>
  <?php
    session_start();
    if (isset($_SESSION['message'])):
    ?>

    <div class ="alert alert-<?=$_SESSION['msg_type']?>">

        <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message'])
        ?>

    </div>
    <?php endif ?>
    <div class="containter">
        <div class="page jumbotron d-flex justify-content-center">
            <form action="auth.php" method="POST">
                <div class="row d-flex justify-content-start ml-5">
                    <div class="form-group m-3 col-md-5">
                        <label class="text-white font-weight-bold">first name</label>
                        <input type="text" name="firstname" required class="form-control" placeholder="Firstname">
                    </div>
                
                    <div class="form-group m-3 col-md-5">
                        <label class="text-white font-weight-bold">last name</label>
                        <input type="text" name="lastname" required class="form-control" placeholder="Last name">
                    </div>
                    <div class="form-group m-3 col-md-3">
                        <label class="text-white font-weight-bold">Username</label>
                        <input type="text" name="username" required class="form-control" placeholder="Enter username">
                    </div>
                    <div class="form-group m-3 col-md-5">
                        <label class="text-white font-weight-bold">Email address</label>
                        <input type="email" name="email" required class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group m-3 col-md-5">
                        <label class="text-white font-weight-bold">Password</label>
                        <input type="password" name="password" minlength="4" required class="form-control" placeholder="Password">
                    </div>

                    <div class="form-group m-3 col-md-5">
                        <label class="text-white font-weight-bold">Confirm-Password</label>
                        <input type="password" name="password-con" minlength="4" required class="form-control" placeholder="Confirm-Password">
                    </div>
                </div>
                
                <div class="row d-flex justify-content-center mt-5">
                    <div class="form-group">
                        <button type="submit" name="save" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>