<?php
    $database= mysqli_connect("localhost","root","","edoc");
    if (!$database){
        die("Connection failed:  Couden't connect to the database");
    }

?>