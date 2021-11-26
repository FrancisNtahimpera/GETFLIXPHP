<?php require "./include/signup.php" ?>
 
 
<!DOCTYPE html>
<html lang="en">


<?php require "head.php"; ?>


<body>

    <form class="container" id="containerInscription" method="post" action="">
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
                    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
                </div>
            </div>
        </div>

        </div>
    </form>
</body>

</html>