<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:0903934.database.windows.net,1433; Database = users", "peterlclark", "Tvc33gtt");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "peterlclark@0903934", "pwd" => "Tvc33gtt", "Database" => "users", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:0903934.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>

