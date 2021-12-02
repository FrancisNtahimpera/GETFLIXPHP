<?php
require "./include/clientinfo.php";
require "./include/profilModification.php";
require "./include/functions.php";
notPass();
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<?php require "head.php" ?>

<script type="text/javascript">
    function showForm() {
        var text = document.getElementById("formpassword");
        if (text.style.display === "none") {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>
<script type="text/javascript">
    function showEmail() {
        var text = document.getElementById("formemail");
        if (text.style.display === "none") {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Getflix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Thriller</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Science Fiction</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Horror</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control p-2" type="search" placeholder="film or series" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">FIND</button>
                </form>




            </div>
        </div>
        <form class="d-flex">
            <ul l class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Deconnexion</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h1>Hello, <?php echo pre($_SESSION['firstname']); ?> , vous voulez vraiment partir ?!</h1>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
                                    <button type="button" class="btn btn-primary" href=""><a href="./include/logout.php" class="text-white">Se déconnecter</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="nav-link active" aria-current="page" href="#"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-exit-hotel-wanicon-flat-wanicon.png" width="35px" /></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="profil.php"><img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-profile-user-interface-wanicon-flat-wanicon.png" width="35px" /></a>
                </li>


            </ul>
        </form>
    </nav>









    <div class="container" id="containerProfil">

        <h1>Hello, <?php echo pre($_SESSION['firstname']); ?> !</h1>






        <div class="row mt-5 ">
            <div class="col-12">
                <h1>My Information : </h1>
            </div>

        </div>
        <div class="row mt-2">




            <div class="col-lg-6 col-md-6 col-sm-12 ">


                <h3> - First Name : </h3>
                <div class="mt-3 mb-3 bg-light bg-gradient border border-1 rounded">
                    <h3><?php echo pre($_SESSION['firstname']); ?> </h3>
                </div>


                <h3> - Lastname : </h3>
                <div class="mt-3 mb-3 bg-light bg-gradient border border-1 rounded">
                    <h3><?php echo pre($_SESSION['lastname']); ?> </h3>
                </div>

                <h3> - Password : </h3>
                <div class="mt-3 mb-3 bg-light bg-gradient border border-1 rounded">
                    <h3> We dont show it ! </h3>
                </div>


            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">

                <h3> - Email : </h3>
                <div class="mt-3 mb-3 bg-light bg-gradient border border-1 rounded">
                    <h3><?php echo pre($_SESSION['email']); ?> </h3>
                </div>

                <h3> - Adress : </h3>
                <div class="mt-3 mb-3 bg-light bg-gradient border border-1 rounded">
                    <h3><?php echo pre($_SESSION['addres']); ?> </h3>
                </div>

                <h3> - Birthday : </h3>
                <div class="mt-3 mb-3 bg-light bg-gradient border border-1 rounded">
                    <h3><?php echo pre($_SESSION['bday']); ?> </h3>
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



            </div>
        </div>



        <div class="row mt-5 mb-2 justify-content-around">
            <div class="col-4"> <button class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center" onclick="showForm()">Change password</button></div>

            <div class="col-4"><button class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center" onclick="showEmail()">Change Email</button></div>



        </div>

        <form id="formpassword" name="frmChange" method="post" action="" onSubmit="return validatePassword()" style="display:none">
            <div class="row">
                <div class="col-4">



                    <label for="first-name"><b>Current password</b></label>
                    <input class="border rounded" type="password" placeholder="Current Password" name="currentPassword" required>
                </div>
                <div class="col-4">

                    <label for="last-name"><b>New Password :</b></label>
                    <input class="border rounded" type="password" placeholder="New Password" name="newPassword" required>
                </div>

                <div class="col-4">
                    <label for="psw-repeat"><b>Repeat Password : </b></label>
                    <input class="border rounded" type="password" placeholder="Repeat Password" name="confirmPassword" id="psw-repeat" required>
                </div>
            </div>




            <div class="col-12"> <button name="submit" value="Submit" class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center">Confirm password</button></div>




        </form>
        <form id="formemail" name="frmChange" method="post" action="" style="display:none">
            <div class="row">
                <div class="col-6">



                    <label for="first-name"><b>Current Email</b></label>
                    <input class="border rounded" type="text" placeholder="Current Email" name="mail" required>
                </div>
                <div class="col-6">

                    <label for="last-name"><b>New Email :</b></label>
                    <input class="border rounded" type="text" placeholder="New Email" name="newmail" required>
                </div>


            </div>




            <div class="col-12"> <button name="submitemail" value="Submit" class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center">Confirm Email</button></div>




        </form>
        <div class="row">
            <div class="class-12 bg-success">
                <h3> <?php echo $messagepassword ?> </h3>
                <h3> <?php echo $message ?> </h3>
            </div>
        </div>










    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>