<?php

$serverName= 'localhost';
$connectionInfo= array("Database"=>"phpDB","UID"=>"sa","pwd"=>"doblezero","CharacterSet"=>"UTF-8");

$conn_sis = sqlsrv_connect($serverName,$connectionInfo);

if($conn_sis)
    {
  //  echo "Connection available";
    }
else{
echo "Error en la conexion";
die( print_r(sqlsrv_errors(),true) );
}
?>