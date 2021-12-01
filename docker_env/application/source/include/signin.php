<?php
session_start();
require "connection.php";
require "clientinfo.php";

$emailinvalid = "";
$sql = "SELECT * from users WHERE id='" . $_SESSION["id"] . "'";
$result = mysqli_query($conn, $sql);
$test = mysqli_fetch_assoc($result);

if (isset($_POST['useremail']) && isset($_POST['userpsw'])) {

    /* function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } */




    $username = $_POST['useremail'];


    $pass = $_POST['userpsw'];

    $sql = "SELECT * FROM users WHERE email='$username' ";
    $result = mysqli_query($conn, $sql);
    $test = mysqli_fetch_assoc($result);



    if (password_verify($pass, $test['passwor'])) {

        $resultat = mysqli_query($conn, $sql);




        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($resultat);


            if ($row['email'] === $username) {
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['id'] = $row['id'];
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ../index.php");
                echo "wrong email";
            }
        } else {
            echo "not working";
        }
    } else {
    }
}
