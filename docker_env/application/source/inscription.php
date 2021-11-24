<?php require "signup.php" ?>
<!DOCTYPE html>
<html lang="en">


<?php require "head.php"; ?> 
  

<body>

    <form class="container" id="containerInscription"  method="post" action="">
    <h1>Register</h1>
        <div class="row">
            
           
            
            
                <div class="col-lg-6 col-md-6 col-sm-12">
              
                    <label for="first-name"><b>First Name</b></label>
                    <input type="text" placeholder="Enter your first name" name="userfname" id="firsname" required>

                    <label for="last-name"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter your last name" name="userlname" id="lastname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="userpsw" id="psw" required>
                
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="userpswcheck" id="psw-repeat" required>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                    
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="useremail" id="email" required>
                    
                    <label for="adress"><b>Adress</b></label>
                    <input type="text" placeholder="Enter adress" name="useradress" id="adress" required>

                    <label for="birthday"><b>Birthday</b></label>
                    <input type="text" placeholder="Enter birthday" name="userbday" id="birthday" required>
                </div>
                
                <!-- <div class="container " id="containerVisa">
                    <div class="row container-fluid  justify-content-center" id="containerVisa">
                        <div class="col-sm-12 col-md-12">
                            <div class="card">
                                <div class="card-header ">
                                    <div class="row">
                                        <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                                        <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png">  </div>
                                    </div>
                                </div>
                                <div class="card-body col-lg-12" style="height: 350px">
                                    <div class="form-group"> <label for="cc-number" class="control-label">CARD NUMBER</label> 
                                        <input id="cc-number" type="tel" class="input-lg form-control cc-number" autocomplete="cc-number" placeholder="•••• •••• •••• ••••" pattern="^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14})$" required> </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="cc-exp" class="control-label">CARD EXPIRY</label> 
                                                <input id="cc-exp" type="tel" class="input-lg form-control cc-exp" autocomplete="cc-exp" placeholder="•• / ••" pattern="(?:0[1-9]|1[0-2])/[0-9]{2}" required> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="cc-cvc" class="control-label">CARD CVC</label> 
                                                <input id="cc-cvc" type="tel" class="input-lg form-control cc-cvc" autocomplete="off" placeholder="••••" pattern="^[0-9]{3, 4}$" required> </div>
                                        </div>
                                    </div>
                                    <div class="form-group"> <label for="numeric" class="control-label">CARD HOLDER NAME</label> <input type="text" class="input-lg form-control"> </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="  container-fluid  col-lg-12 justify-content-center"></br>
                        <div class="form-check">
                                <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault"> I AGREE WITH THE TERMS <a href="url">Contract</a>     </label></br>
                                <button type="submit" class="registerbtn d-grid gap-2 col-12 mx-auto" name="submit" id="register">Register</button>
                </div>
    
            <div class="col-lg-12 ">
                <p>Already have an account? <a href="index.php">Sign in</a>.</p>
            </div>
        </div>
        </div>

    </div>
    </form>
</body>
</html>