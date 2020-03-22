<?php
$hostName='localhost';
$userName='root';
$password='';
$databaseName='CSE2020';
$conn=mysqli_connect($hostName,$userName,$password,$databaseName);
if($conn)
{}
else
{
    echo "Connection Failed"+mysqli_connect_error();
}
?>