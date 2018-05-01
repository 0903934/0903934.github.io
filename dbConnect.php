<?php
/**
 * Created by PhpStorm.
 * User: Stewart
 * Date: 23/03/2018
 * Time: 08:26
 */

$servername = "csdm-webdev";
$dbname="db0903934_cmm007";
$username = "0903934";
$password = "0903934";

// Create connection
$conn = new mysqli($servername,  $username, $password, $dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


echo "success";