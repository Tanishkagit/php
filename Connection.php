<?php
$hostname="";
$username="";
$password="";
$connection=mysqli_connect($hostname,$username,$password);
if($connection){
echo "connection successful connected";
}
else{
echo "connection is not connected ";
}
$query="CREATE DATABASE tanishka";
$check=mysqli_query($connection,$query);
if($check){
echo "database created ";
}
else{
echo "error";
}

$query1="CREATE TABLE student";
$check1=mysqli_query($connection,$query1);
if($check1){
echo "table is created ";
}
else{
echo "error";
}
?>

