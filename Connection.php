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
