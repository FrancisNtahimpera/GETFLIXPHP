<?php
session_start();
require "connection.php";
require "clientinfo.php";
$bademail = $_SESSION['email'];



/* AJOUTMAIL */

if (isset($_POST['submitemail'])) {

    $result = mysqli_query($conn, "SELECT * from users WHERE id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);




    if ($_POST["mail"] == $row["email"]) {
        mysqli_query($conn, "UPDATE users set email='" . $_POST["newmail"] . "' WHERE id='" . $_SESSION["id"] . "'");

        $message = "mail Changed";

        $_SESSION['email'] = $_POST["newmail"];
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
    }

    if ($_POST["newlastname"]) {
        mysqli_query($conn, "UPDATE users set lastname='" . $_POST["newlastname"] . "' WHERE id='" . $_SESSION["id"] . "'");

        $message = "mail Changed";

        $_SESSION['lastname'] = $_POST["newlastname"];
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
    }

    if ($_POST["adresse"]) {
        mysqli_query($conn, "UPDATE users set addres='" . $_POST["adresse"] . "' WHERE id='" . $_SESSION["id"] . "'");

        $message = "adress Changed";

        $_SESSION['addres'] = $_POST["adresse"];
    }
}





















/* ADDMIN PANEL */

function table()

{

    $servername = "database";
    $username = "root";
    $password = "root";
    $dbname = "getflix";

    // test
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $result = mysqli_query($conn, "SELECT * FROM users");

    echo "<table class='table table-dark' border='1'>
    <tr>
    <th>Modify</th>
    
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Password</th>
    <th>Email</th>
    <th>Address</th>
    <th>Birthday</th>
    <th>Delete</th>
    


    </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo " <td > <a href='/include/modify_user.php?id=" . $row['id'] . "'> Modify this user </a></td>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['passwor'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['addres'] . "</td>";
        echo "<td>" . $row['bday'] . "</td>";

        echo " <td>
        <li class='nav-item  ' type='button' class='btn btn-primary' data-toggle='modal' data-target='#idModal'>
<div class='modal fade' id='idModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog ' role='document'>
                                    <div class='modal-content bg-dark'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='idModalLabel'> Delete this user ? </h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>
                                        </div>
                                        <div class='modal-body'>
                                            <h1 class='text-center'> Are you sure ? <br> <br> this action is irreversible ! </h1>
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary bg-success' data-dismiss='modal'>annuler</button>
                                            <button type='button' class='btn btn-danger text-white' href=''><a class='text-white' href='/include/delete_user.php?id=" . $row["id"] . "'> Delete this user </a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class='nav-link active' aria-current='page' href='#'><img src='https://img.icons8.com/officel/40/000000/remove-user-male.png'/></a>
                          </li>  </td>  ";

        echo "</tr>";
    }

    echo "</table>";


    mysqli_close($conn);
}
