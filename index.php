<?php
  if(isset($_POST['email'])){

    //Connecttion
    $conn = mysqli_connect('localhost','preet','123456','blog');
    if(!$conn)
       echo "ERROR".mysqli_connect_error();   

    //variables
    $email=$_POST['email'];
    $password=$_POST['password'];

    //query
    $sql = "SELECT * FROM user WHERE  email='$email';";
    $result =$conn->query($sql);

   if($result->num_rows > 0){
       $user = $result->fetch_assoc();
    
       if($password == $user['password'])
          header("Location:home.php");
       else
          echo "Invalid Password";
    }
    else
    echo "Invalid Email";
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
  <a href="http://localhost/Signup/signup.php"><input type="submit" value="Sign Up" name="signup" class="btn btn-primary"></a>
  <div class="card border-primary mb-3 text-primary mx-auto" style="width:400px; max-width: 18rem; margin-auto;">
  <form class="container" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password">
  </div>
  <input type="submit" value="submit" name="submit" class="btn btn-primary mx-auto">
</form>
</div></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>