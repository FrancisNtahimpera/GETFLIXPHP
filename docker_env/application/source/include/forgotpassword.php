<?php
require "connection.php";



use PHPMailer\PHPMailer\PHPMailer;
/* use PHPMailer\PHPMailer\Exception; */



$forgotmessage = "";



if (isset($_POST['submitforgot'])) {




    require_once './PHPMailer/PHPMailer.php';
    require_once './PHPMailer/SMTP.php';
    require_once './PHPMailer/Exception.php';

    $emailforgot = $_POST['emailforgot'];


    $select = mysqli_query($conn, "SELECT * FROM users WHERE email = '$emailforgot';") or exit(mysqli_error($conn));
    if (mysqli_num_rows($select)) {


        $sql = "SELECT * from users WHERE  WHERE email = '$emailforgot';";
        $result = mysqli_query($conn, $sql);

        $password = uniqid();
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "UPDATE users set passwor='" . $hashed_password . "'  WHERE email = '$emailforgot';");



        $mail = new PHPMailer();

        try {
            //Server settings
            $mail->SMTPDebug = 0;                //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'forgot.frealis@gmail.com';                     //SMTP username
            $mail->Password   = 'frealis123';
            $mail->Port       = 465;                           //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('forgot.frealis@gmail.com', 'Support');
            $mail->addAddress($emailforgot, 'Joe User');     //Add a recipient
            // $mail->addAddress('ellen@example.com');               //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Hello this is your new password ';
            $mail->Body    = "This is your new password : $password";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            /*    header("Location: ./index#myModal.php"); */

            /*   $forgotmessage = '<script>alert("Mail  as been send ! Check yours SPAM ")</script>'; */
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        /*  $forgotmessage = '<script>alert("Mail not found")</script>'; */
    }
}
    //Create an instance; passing `true` enables exceptions
