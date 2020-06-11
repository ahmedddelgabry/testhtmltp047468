<?php
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "apuadmin", "pwd" => "apu@123456", "Database" => "ddacdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ddacs.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection Success: connected!";
  
  ?>
