<?php

if (isset($_POST['submitin'])) {
    require "connection.php";









    if (isset($_POST['useremail']) && isset($_POST['userpsw'])) {

        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }




        $username = validate($_POST['useremail']);


        $pass = validate($_POST['userpsw']);

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
                    header("Location: ../accueil.php?id=");
                    exit();
                } else {
                    echo " invalid email";
                }
            } else {
                echo "not working";
            }
        } else {
            // Invalid credentials

        }
    }
}
