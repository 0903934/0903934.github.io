<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 25/03/2018
 * Time: 11:30
 */
include ("dbConnect.php");

$username=$_POST["username"];
$password=$_POST["password"];

//$OK="no";


if(empty($_POST['username']) || empty($_POST['password'])){
    header("location: loginerror.html");
}
//else echo $OK;

echo $username;
echo $password;


//$sql = "SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$password' ";
$sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password' ";

//$result = $conn->query($sql);
$result = mysqli_query($conn,$sql);

//if ($result->num_rows > 0) {
if (mysqli_num_rows($result)==1) {
    header("location: loginsuccess.html");
    }else {header("location: loginerror2.html");
}






$conn -> close();

?>


