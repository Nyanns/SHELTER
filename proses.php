<?php
include "koneksi.php";
if (isset($_GET['Name'])) {
    $Name = $_GET['Name'];
    $Email = $_GET['Email'];
    $message = $_GET['message'];

    echo "<span class='success'> Dengan <b> Metode Post </b></span></br>";
    echo "Name : " . $Name . "<br/>";
    echo "Email : " . $Email . "<br/>";
    echo "message : " . $message  . "<br/>";
    $mysqli = "INSERT INTO my ( Name, Email, message) 
    VALUES('$Name','$Email','$message')";
    $result = mysqli_query($connect, $mysqli);
}
mysqli_close($connect);
