<?php
 
// DB credentials
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="stadium_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}