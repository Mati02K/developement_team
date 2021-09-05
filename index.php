<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a Student Portal developed during Quasar Tech Solutions Summer Code Camp">
    <title>Student Portal</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <style>
    input
    {
        margin-top: 15px;
        padding: 15px;
    }
    button{
        margin-top: 15px;
    }
    </style>
    <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <img src="logo.jpg" class="img-responsive center-block d-block mx-auto" height="160" width="150" alt="Logo">
                <h5 class="card-title text-center">Student Portal</h5>

                <form class="form-signin" action=""  method="post"  autocomplete="off">
                  <div class="form-label-group">
                    <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
                  </div>
    
                  <div class="form-label-group">
                    <input type="password"name="pass" class="form-control" placeholder="Password" required>
                    </div>

                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
                  <hr class="my-4">
                  <center><a href="">Facing Problems!!!</a></center> 
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
   
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
</body>
</html>

<?php
// Password: QWERTY12345

if(isset($_POST['submit']))
{
    require('config.php');

    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);

    $email = htmlspecialchars(strip_tags($email));
    $pass = htmlspecialchars(strip_tags($pass));

    $email = mysqli_real_escape_string($conn,$email);
    $pass = mysqli_real_escape_string($conn,$pass);

    $query = "SELECT * FROM `admin_table`";

    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    if($row['email'] == $email && $row['password'] == $pass)
    {
        
        $_SESSION['username'] = $email;
        echo "<script>alert('Success')</script>";
        echo "<script>location.replace('dashboard.php')</script>";
    }
    else
    {
        echo "Error".mysqli_error($conn);
    }
}
?>
