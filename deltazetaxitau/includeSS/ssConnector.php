<?php
//THIS IS EVERYTIME WE HAVE TO CONNECT TO OUR DATABASE
//server name, user name, password and database name
//these are the 4 parameters we need to connect to the database

$dbServername = "127.0.0.1:3312"; //THE SERVER WE ARE RUNNING THE DATABASE ON
$dbUsername = "root";
$dbPassword = "";
$dbName = "deltazeta"; //NAME OF THE DATABASE WITH ALL OF THE USERS

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
