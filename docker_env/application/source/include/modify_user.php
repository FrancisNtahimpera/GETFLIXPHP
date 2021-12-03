<?php
require "./functions.php";
require "./Adminmodification.php";
require "connection.php";
notPass();
admin();
session_start();

if (isset($_GET['id'])) {









    $sql = "SELECT * from users WHERE id='" . $_GET["id"] . "'";

    $resultat = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultat) === 1) {
        $row = mysqli_fetch_assoc($resultat);


        $_SESSION['addres'] = $row['addres'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['bday'] = $row['bday'];
        $_SESSION['passwor'] = $row['passwor'];
    }
}

?>





<script type="text/javascript">
    function showName() {


        var text1 = document.getElementById("formname");
        var text2 = document.getElementById("formemail");
        var text3 = document.getElementById("formdate");
        if (text1.style.display === "none") {
            text1.style.display = "block";
            text2.style.display = "none";

            text3.style.display = "none";
        } else {
            text1.style.display = "none";
        }


    }

    function showEmail() {


        var text1 = document.getElementById("formname");
        var text2 = document.getElementById("formemail");
        var text3 = document.getElementById("formdate");
        if (text2.style.display === "none") {
            text2.style.display = "block";
            text1.style.display = "none";

            text3.style.display = "none";
        } else {
            text2.style.display = "none";
        }
    }

    function showdate() {


        var text1 = document.getElementById("formname");
        var text2 = document.getElementById("formemail");
        var text3 = document.getElementById("formdate");
        if (text3.style.display === "none") {
            text3.style.display = "block";
            text1.style.display = "none";
            text2.style.display = "none";

        } else {
            text3.style.display = "none";
        }

    }
</script>
















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="HgV0aLrDDnfzBYRVdROlgTHXBilL93bCdG6w-fZtoU0" />
    <link rel="stylesheet" href="../style.css">
    <title>Inscription</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Getflix</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

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
                                    <button type="button" class="btn btn-primary" href=""><a href="./logout.php" class="text-white">Se déconnecter</a></button>
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









    <div class="container bg-warning" id="containerProfil">






        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <h1>Hello, Admin !</h1>
                <h1>Lets modify this user ! </h1>

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
                    <h3>Please , passing by the forgot password page </h3>
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

            </div>
        </div>



        <div class="row mt-5 mb-2 justify-content-around">
            <div class="col-3"> <button class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center" onclick="showName()"> Change Name </button></div>

            <div class="col-3"><button class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center" onclick="showEmail()"> Change Email </button></div>



            <div class="col-3"><button class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center" onclick="showdate()"> Change Date & Adresse </button></div>
        </div>







        <!--   CHANGE DE NOM -->
        <form id="formname" name="frmChange" method="post" action="" style="display:none">
            <div class="row">

                <div class="col-6">

                    <label for="last-name"><b>New first name :</b></label>
                    <input class="border rounded" type="text" placeholder="New name" name="newname" required>
                </div>
                <div class="col-6">

                    <label for="last-name"><b>New last name :</b></label>
                    <input class="border rounded" type="text" placeholder="New name" name="newlastname" required>
                </div>

            </div>
            <div class="col-12"> <button name="submitname" value="Submit" class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center">Confirm Name</button></div>
        </form>




        <!--  CHANGEMENT DE EMAIL  -->

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



        <!--   CHANGE DE adresse et date -->
        <form id="formdate" name="frmChange" method="post" action="" style="display:none">
            <div class="row">

                <div class="col-6">

                    <label for="date"><b>New birthday :</b></label>
                    <input class="border rounded" type="date" placeholder="New date" name="date" required>
                </div>
                <div class="col-6">

                    <label for="adresse"><b>New adresse :</b></label>
                    <input class="border rounded" type="text" placeholder="New adresse" name="adresse" required>
                </div>

            </div>
            <div class="col-10"> <button name="submitdate" value="Submit" class="border rounded registerbtn d-grid gap-2 col-12 mx-auto d-flex justify-content-center align-items-center">Confirm Name & Date </button></div>
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