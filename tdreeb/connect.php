



<?php

$server="localhost";
$username="root";
$password="";
$dbname="training";

//create connection
$con=mysqli_connect ($server,$username,$password,$dbname);

if(!(mysqli_set_charset($con,'utf8')))
die("Could not support arabic");
//check connection
if(!$con)
{
    die("connection faild : " . mysqli_connect_error() );
}




    











?>