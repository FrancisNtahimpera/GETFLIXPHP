<?php require "./include/forgotpassword.php" ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "head.php" ?>
    <link rel="stylesheet" href=" css/style.css">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">


        <div class="modal-content bg-dark mr-2">
            <div class="modal-header bg-transparent text-white text-center  pt-5 pb-5 ">

                <h1 class="text-center pl-4 ">What's My Password?</h1>
            </div>
            <div class="modal-body bg-transparent text-white">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="text-center pt-3 ">

                                <p>If you have forgotten your password you can reset it here.</p>
                                <div class="panel-body">
                                    <fieldset>
                                        <div class="form-group pt-5 pb-5">
                                            <input class="form-control input-lg" placeholder="E-mail Address" name="emailforgot" type="email">
                                        </div>
                                        <button class="btn btn-outline-light btn-lg  bg-primary " type="submit" name="submitforgot">Send new password</button>
                                        <div class="bg-success">
                                            <h1> <?php echo $forgotmessage; ?> </h1>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12 pt-5 mb-5 ">
                    <button class="btn  bg-danger text-white" data-dismiss="modal" aria-hidden="true">Cancel</button>
                </div>
            </div>
        </div>


    </form>
</body>

</html>