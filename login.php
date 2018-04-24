<?php
include ("connection.php");
if(empty($_POST["username"]) || empty($_POST ["password"]))
{
    echo "Both fields are required.";
} else
{
    $username=$_POST['username'];
    $password=$_POST['password'];


    $query = "SELECT * FROM [users].[dbo].[users4] WHERE user='{$username}' AND"
         ."password='{$password}' AND active='1'";
$result = sqlsrv_query($conn, $query); 
    
    if (mysqli_num_rows($result) == 1)
    {
        header("location: index.html");
    } else
    {
        echo "Incorrect username or password.";
    }
}

while($row = sqlsrv_fetch_array($result)){
       $_SESSION['id'] = $row['id'];
       $_SESSION['name'] = $row['name'];
       $_SESSION['user'] = $row['username'];
       $_SESSION['level'] = $row['level'];
    }

?>
