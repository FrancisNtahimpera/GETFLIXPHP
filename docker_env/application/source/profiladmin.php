<?php
require "./include/clientinfo.php";
require "./include/Adminmodification.php";
require "./include/functions.php";

notPass();
admin();
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









    <div class="container-fluid">

        <h1>Hello, <?php echo pre($_SESSION['firstname']); ?> !</h1>






        <div class="row mt-5 ">
            <div class="col-12">
                <h1>Users INFO : </h1>
            </div>

        </div>
        <div class="row mt-2">




            <div class="col-12 ">
                <?php table() ?>

            </div>


        </div>













    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>