<?php require "./include/signin.php" ?>
<?php require "./include/signup.php" ?>
<?php require "./include/clientinfo.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  </br></br>
  <div class="container">
    <div class="row">
      <!-- Button trigger modal -->
      <div class="container-fluid d-flex justify-content-end">
        <div>
          <button type="button" class="btn btn-dark mx-2" data-toggle="modal" data-target="#exampleModale1">
            Sign In
          </button>
        </div>
        <div>
          <button type="button" class="btn btn-dark mx-2" data-toggle="modal" data-target="#exampleModale2">
            Sign Up
          </button>
        </div>
      </div>

      

      <!-- Modal -->
      <form action="" method="POST">
        <div class="modal fade container-fluid" id="exampleModale1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelee" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark">


              <div class="card bg-transparent container-fluid" style="border-radius: 1rem;">


                <div class="mb-md-5 mt-md-4 pb-5 bg-transparent text-white">

                  <h2 class="fw-bold mb-2 text-uppercase ">Sign In your account</h2>
                  <p class="text-white-50 mb-5">Please enter your email and password!</p>

                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Email:</label>
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="useremail" />
                  </div>

                  <div class="form-outline form-white mb-4">
                  <label class="form-label" for="typePasswordX">Password:</label>
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="userpsw" />
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="changepassword.php">Forgot password?</a></p>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submitin">Login</button>

                </div>

                <div>
                  <p class="mb-0">Don't have an account? <a href="inscription.php" class="text-white-50 fw-bold">Sign Up</a></p>
                </div>


              </div>
            </div>

          </div>
        </div>
      </form>

      <form action="" method="POST">
        <div class="modal fade container-fluid" id="exampleModale2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelee" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark">


                <div class="card bg-transparent container-fluid" style="border-radius: 1rem;">


                  <div class="mb-md-5 mt-md-4 pb-5 bg-transparent">

                    <h1>Register</h1>
                      <div class="row">

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="first-name"><b>First Name</b></label>
                            <input type="text" placeholder="Enter your first name" name="userfname" id="firsname" required>

                            <label for="last-name"><b>Last Name</b></label>
                            <input type="text" placeholder="Enter your last name" name="userlname" id="lastname" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="userpsw" id="psw" required>

                            <label for="psw-repeat"><b>Repeat Password</b></label><?php echo $passworderror; ?></span>
                            <input type="password" placeholder="Repeat Password" name="userpswcheck" id="psw-repeat" required>
                            <span class="error">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">

                            <label for="email"><b>Email</b></label><span class="error"><?php echo $emailerror; ?></span>
                            <input type="text" placeholder="Enter Email" name="useremail" id="email" required>


                            <label for="adress"><b>Adress</b></label>
                            <input type="text" placeholder="Enter adress" name="useradress" id="adress" required>

                            <label for="birthday"><b>Birthday</b></label><br>
                            <input type="date" placeholder="Enter birthday" name="userbday" id="birthday" value="1989-07-05" min="1930-01-01" max="2030-12-31"required>
                        </div>

                        
                        <div class="  container-fluid  col-lg-12 justify-content-center"></br>
                            <div class="form-check">
                                <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault"> I AGREE WITH THE TERMS <a href="url">Contract</a> </label></br>
                                <button type="submit" name="submitup" class="registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center" id="register">Register</button>
                            </div>

                            <div class="col-lg-12 ">
                                <p>Already have an account? <a data-target="#exampleModale1" href="login.php">Sign in</a>.</p>
                            </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>

          </div>
        </div>
      </form>

      

    </div> <!-- /.row -->
  </div> <!-- /.container -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>