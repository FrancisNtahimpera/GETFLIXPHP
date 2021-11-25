<?php require "./include/signin.php" ?>
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
  </br></br></br>
  <div class="container">
    <div class="row">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModale">
        Sign In
      </button>

      <!-- Modal -->
      <form action="" method="POST">
        <div class="modal fade container-fluid" id="exampleModale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelee" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content bg-dark">


              <div class="card bg-transparent container-fluid" style="border-radius: 1rem;">


                <div class="mb-md-5 mt-md-4 pb-5 bg-transparent">

                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Please enter your login and password!</p>

                  <div class="form-outline form-white mb-4">
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" name="useremail" />
                    <label class="form-label" for="typeEmailX">Email</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" name="userpsw" />
                    <label class="form-label" for="typePasswordX">Password</label>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="submit">Login</button>

                </div>

                <div>
                  <p class="mb-0">Don't have an account? <a href="inscription.php" class="text-white-50 fw-bold">Sign Up</a></p>
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