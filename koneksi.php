<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "shelter";

$connect = mysqli_connect($host, $user, $pass);
mysqli_select_db($connect, $db);

if ($connect) {
    echo 'OKOKOKOKOKOKOKO';
} else {
    echo 'Ooooooooooooooooooo';
}
