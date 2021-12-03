<?php
//session_start();
include "connection.php";
include "clientinfo.php";


$sql = "SELECT * from users WHERE email='" . $_SESSION["email"] . "'";
$resultat = mysqli_query($conn, $sql);


function toogle1($var = '')
{

    if (!isset($_SESSION['email'])) {
        $var = "hide";
        echo $var;
    }
};

function toogle2($var = '')
{

    if (isset($_SESSION['email'])) {
        $var = "hide";
        echo $var;
    }
};

function toogle3($var = '')
{

    if (!isset($_SESSION['email'])) {

        $var = ' <button class=" know-more btn btn-dark" onClick="test4()" id="<?php echo  $tester = $moviesArray[$i]->id; ?>"> You must be logged to see </button>';
        echo $var;
    } else {


        $var = ' <button class=" know-more btn btn-dark" onClick="openNav() , clic(this.id) " id="<?php echo  $tester = $moviesArray[$i]->id; ?>"> Watch it </button>';
        echo $var;
    }
}
function notPass()
{

    if (!isset($_SESSION['email'])) {
        echo $mes = "echo '<script type='text/javascript'>alert('You dont have any acces'); window.location.href = '../login.php'; </script>";
    }
}


function admin()
{
    if ($_SESSION['email'] != "admin@admin.com") {
        echo $mes = "echo '<script type='text/javascript'>alert('You dont have any acces'); window.location.href = '../login.php'; </script>";
    }
}



function pre($value)
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
