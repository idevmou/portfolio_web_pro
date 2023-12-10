<?php
$servername="localhost";
$username="root";
$password="";
$database="xenerninfotech";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    echo($mysqli->connect_error);
}

?>