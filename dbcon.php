<?php
$databasename = "PHPCRUD_DB";
$server="localhost";
$username="root";
$password="";
$conn=new mysqli($server,$username,$password,$databasename);
if($conn->connect_error){
    echo 'connection failed'.$conn->connect_error;
}
else{
    echo 'connection sucessful'."<br>";
}
?>