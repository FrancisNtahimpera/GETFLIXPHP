<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

 
  

<body>

    <form class="container" id="containerInscription" action="">
        <div class="row">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            
                <div class="col-md-6 col-sm-12">
              
                    <label for="first-name"><b>First Name</b></label>
                    <input type="text" placeholder="Enter your first name" name="first-name" id="first-name" required>

                    <label for="last-name"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter your last name" name="last-name" id="last-name" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
                
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
                </div>
                
                <div class="col-md-6 col-sm-12">
                    
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" id="email" required>
                    
                    <label for="adress"><b>Adress</b></label>
                    <input type="text" placeholder="Enter adress" name="adress" id="adress" required>

                    <label for="birthday"><b>Birthday</b></label>
                    <input type="text" placeholder="Enter birthday" name="birthday" id="birthday" required>
                </div>
                
                <div class="row">
                    <div class="container-fluid d-flex justify-content-center">
                        <div class="col-sm-12 col-md-12">
                            <div class="card">
                                <div class="card-header ">
                                    <div class="row">
                                        <div class="col-md-6"> <span>CREDIT/DEBIT CARD PAYMENT</span> </div>
                                        <div class="col-md-6 text-right" style="margin-top: -5px;"> <img src="https://img.icons8.com/color/36/000000/visa.png"> <img src="https://img.icons8.com/color/36/000000/mastercard.png">  </div>
                                    </div>
                                </div>
                                <div class="card-body" style="height: 350px">
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
                    </div>
                </div>
    
            
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                <button type="submit" class="registerbtn" id="register">Register</button>
           
        
            <div class="container signin">
                <p>Already have an account? <a href="#">Sign in</a>.</p>
            </div>
        </div>
        </div>

    </div>
    </form>
</body>
</html>