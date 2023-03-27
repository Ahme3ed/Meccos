<?php
$host = "localhost";
$username = "root";
$password = "menotalk";
$db = "store";

$conn = new mysqli("$host","$username","$password","$db");

if($conn->connect_error)
{
    die ("connection failed");

}else
{
}
?>