<?php
include ("connection.php");
if(empty($_POST["username"]) || empty($_POST ["password"]))
{
    echo "Both fields are required.";
} else
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT uid FROM dbo.users2 WHERE username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result) == 1)
    {
        header("location: index.html");
    } else
    {
        echo "Incorrect username or password.";
    }
}

?>
