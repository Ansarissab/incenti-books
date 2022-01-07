<?php 

 $host = "localhost:3306";
   $dbusername = "root";
   $dbpassword = "401f5b0a514037a81e54b6fd7394cd0432c1722c39676459";
   $dbname = "incentibook";


/* Attempt to connect to MySQL database */
$link = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
