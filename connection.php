<?php
//error_reporting(0);
$server_name ="localhost";
$username ="root";
$password ="";
$dbname ="employee_portal";

$conn = mysqli_connect($server_name,$username, $password, $dbname);

if($conn)
{
//    echo "Connection Successful";
}
else {
    echo "Connection Failed" . mysqli_connect_error();//Returns a string description of the last connect error


    header("Location: search.php");
    exit();
}
?>