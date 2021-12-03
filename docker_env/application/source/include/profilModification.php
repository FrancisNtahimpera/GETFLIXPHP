<?php
session_start();
require "connection.php";
require "clientinfo.php";
$bademail = $_SESSION['email'];


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

if (isset($_POST['submitemail'])) {

    $result = mysqli_query($conn, "SELECT * from users WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);




    if ($_POST["mail"] == $row["email"]) {
        mysqli_query($conn, "UPDATE users set email='" . $_POST["newmail"] . "' WHERE id='" . $_SESSION["id"] . "'");

        $message = "mail Changed";

        $_SESSION['email'] = $_POST["newmail"];

        header("Refresh:0");
    } else {
        $message = "Current mail is not correct";
    }
}




/* AJOUTNAME */

if (isset($_POST['submitname'])) {

    $result = mysqli_query($conn, "SELECT * from users WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);

    if ($_POST["newname"]) {
        mysqli_query($conn, "UPDATE users set firstname='" . $_POST["newname"] . "' WHERE id='" . $_SESSION["id"] . "'");

        $message = "mail Changed";

        $_SESSION['firstname'] = $_POST["newname"];

        header("Refresh:0");
    }

    if ($_POST["newlastname"]) {
        mysqli_query($conn, "UPDATE users set lastname='" . $_POST["newlastname"] . "' WHERE id='" . $_SESSION["id"] . "'");

        $message = "mail Changed";

        $_SESSION['lastname'] = $_POST["newlastname"];

        header("Refresh:0");
    }
}



/* AJOUTdate */

if (isset($_POST['submitdate'])) {

    $result = mysqli_query($conn, "SELECT * from users WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);

    if ($_POST["date"]) {
        mysqli_query($conn, "UPDATE users set bday='" . $_POST["date"] . "' WHERE id='" . $_SESSION["id"] . "'");

        $message = "date Changed";

        $_SESSION['bday'] = $_POST["date"];

        header("Refresh:0");
    }

    if ($_POST["adresse"]) {
        mysqli_query($conn, "UPDATE users set addres='" . $_POST["adresse"] . "' WHERE id='" . $_SESSION["id"] . "'");

        $message = "adress Changed";

        $_SESSION['addres'] = $_POST["adresse"];

        header("Refresh:0");
    }
}
