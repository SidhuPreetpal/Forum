<?php
  
  if(isset($_POST['email'])){
      //Connecttion
    $conn = mysqli_connect('localhost','preet','123456','blog');
    if(!$conn)
       echo "ERROR".mysqli_connect_error();   


    //variables
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $name= mysqli_real_escape_string($conn, $_POST['name']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);

    $sql="INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
    if(mysqli_query($conn,$sql))
        echo "Sighned up Successful";
    else
    echo 'Query error'.mysqli_error($conn);
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>blog page</title>
  </head>
  <body>
  <div class="card border-primary mb-3 text-primary mx-auto" style="width:400px; max-width: 18rem; margin-auto;">
  <form class="container " method="POST">
  <div class="form-group">
    <label for="name">Enter name:</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Enter email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Enter password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password">
  </div>
  <div class="form-group">
    <label for="password">Re-enter Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password">
  </div>
  <input type="submit" value="Regiter" name="register" class="btn btn-primary">
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>