<?php
$config = mysqli_connect("localhost","root","","nilai_web");
// check connection 
 if ($config) {
    echo "";
 } else {
    echo "Failed to connect to the database";
 }
?>