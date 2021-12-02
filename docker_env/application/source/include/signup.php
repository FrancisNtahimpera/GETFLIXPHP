<?php

if (isset($_POST['submitup'])) {
    require "connection.php";

    $emailerror = "";
    $passworderror = "";


    $firstname = $_POST['userfname'];
    $lastname = $_POST['userlname'];
    $passw = $_POST['userpsw'];
    $passcheck = $_POST['userpswcheck'];
    $email = $_POST['useremail'];
    $address = $_POST['useradress'];
    $bday = $_POST['userbday'];

    if (empty($firstname) or empty($lastname) or empty($passw) or empty($passcheck) or empty($email) or empty($address) or empty($bday)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?error=invalidemail");

        exit();
    } elseif ($passw !== $passcheck) {
        /*   header("Location: ../inscription.php?error=passwordsnotmatching");

        exit(); */
        $passworderror = " password are not similar";
    } else {

        $hashed_password = password_hash($passw, PASSWORD_DEFAULT);



        $select = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email';") or exit(mysqli_error($conn));
        if (mysqli_num_rows($select)) {
            /*  header("Location: ../inscription.php?error=thisemailisused");

            exit(); */
            $emailerror = " this email already exist";
        } else {
            $sql = "INSERT INTO users (firstname, lastname, passwor, email, addres, bday)  VALUES ( '$firstname', '$lastname','$hashed_password', '$email', '$address', '$bday')";
            mysqli_query($conn, $sql);
            header("Location: ../login.php");
            exit();
        }
    }
}
