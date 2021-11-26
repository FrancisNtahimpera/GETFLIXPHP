<?php

session_start();
require "connection.php";
require "clientinfo.php";


if (isset($_POST['submit'])) {

    $password = $_POST['currentPassword'];



    $sql = "SELECT * from users WHERE id='" . $_SESSION["id"] . "'";
    $result = mysqli_query($conn, $sql);
    $test = mysqli_fetch_assoc($result);


    if (password_verify($password, $test['passwor'])) {




        if ($_POST["newPassword"] == $_POST["confirmPassword"]) {

            $hashed_password = password_hash($_POST["newPassword"], PASSWORD_DEFAULT);



            mysqli_query($conn, "UPDATE users set passwor='" . $hashed_password . "' WHERE id='" . $_SESSION["id"] . "'");

            $messagepassword = "Password Changed";
        } else {
            $messagepassword = " Password is not correct";
        }
    } else {
        $messagepassword = " error , wrong password";
    }
}
 
/* AJOUTMAIL */

/* if (count($_POST) > 0) {

    $result = mysqli_query($conn, "SELECT * from users WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);




    if ($_POST["mail"] == $row["email"]) {
        mysqli_query($conn, "UPDATE users set email='" . $_POST["newmail"] . "' WHERE id='" . $_SESSION["id"] . "'");

        $message = "mail Changed";
    } else {
        $message = "Current mail is not correct";
    }
} */