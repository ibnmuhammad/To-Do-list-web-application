<!DOCTYPE html>
<html>
    <head>
        <title>To Do List</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/css/hostel.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/dd4fde7157.js"></script>      
    </head>
    <body background="images\todo.jpg" style="background-position: center; background-repeat: no-repeat; background-size: cover; position: relative;">
        
        <div class="modal-dialog">
          <div style="margin-top: 200px;" class="modal-content">
            <div class="modal-header">
              <h4 style="text-align: center" class="modal-title"><i class="fas fa-sign-in-alt"></i>Log In</h4>
            </div>
            <div class="modal-body">
              <form action="index.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-3">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="Email" placeholder="Enter Your Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Password:</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" name="submit" value="LogIn">
                    <h6 style="text-align: left"> New User? 
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Click Here to Sign Up</button>
                    </h6>
                </div>
              </form>
            </div>
          </div>
        </div>
        
<?php

    $dbconnection = mysqli_connect('localhost', 'root', '', 'tododb');

    if(isset($_POST['submit']))
    {
        $Email = $_POST['Email'];
        $Password = $_POST['password'];
        
        $sql = "SELECT * FROM Users WHERE Email = '$Email' AND password = '$Password'";
        $sqlquery = mysqli_query($dbconnection, $sql) or die(mysqli_error($dbconnection));
        $count = mysqli_num_rows($sqlquery);
        
        
        if ($count == 1)
        {
            session_start();
            $_SESSION["Email"]= $Email;
            header('Location: Users/index.php');
        }
        
        else
        {
				echo "<div class='col-md-6 col-sm-6 col-xs-6 btn btn-warning'>";
		        echo "Incorrect login credentials!";
		        echo "</div>";
        }
    }
?>
        <!-- Signup modal in registration form on sign in if the person is new in a system-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 style="text-align: center" class="modal-title" id="exampleModalLabel"><i class="far fa-user"></i>Registration</h3>
                <!--Close Button-->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                    <form action="signup.php" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="Email" placeholder="Enter Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Password:</label>
                        <div class="col-sm-9">
                            <input type="password" minlength=8 class="form-control" name="password" placeholder="Enter Your Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Re-Enter Password:</label>
                        <div class="col-sm-9">
                            <input type="password" minlength=8 class="form-control" name="password2" placeholder="Enter Your Password again" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="submit" value="Register">
                    </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
        
    </body>
</html>