<?php 

if (isset($_POST['submit'])) {  
    require "connection.php";


    $firstname = $_POST['userfname'];
    $lastname = $_POST['userlname'];
    $passw = $_POST['userpsw'];
    $passcheck = $_POST['userpswcheck'];
    $email = $_POST['useremail'];
    $address = $_POST['useradress'];
    $bday = $_POST['userbday'];

    if (empty($firstname) or empty($lastname) or empty($passw) or empty($passcheck) or empty($email) or empty($address) or empty($bday)) {
        header("Location: inscription.php?error=emptyfields");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: inscription.php?error=invalidemail");
        exit();
    } elseif ($passw !== $passcheck) {
        header("Location: inscription.php?error=passwordsnotmatching");
        exit();
    } else {
        $select = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email';") or exit(mysqli_error($conn));
            if (mysqli_num_rows($select)) {
                header("Location: inscription.php?error=thisemailisused");
                exit();
            } else {
                $sql = "INSERT INTO users (firstname, lastname, passwor, email, addres, bday)  VALUES ( '$firstname', '$lastname','$passw', '$email', '$address', '$bday')";
                mysqli_query($conn,$sql);
                header("Location: index.php");
                exit();
            }
    
    }
    

}


