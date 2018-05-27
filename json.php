<?php
include("conexion_sql_server.php");

getData($conn_sis);

function getData($conn_sis)
{
   $data = array();
   $info = array();

   $i = 0;

    $consulta = "select * from usuarios order by id";
    $query = sqlsrv_query($conn_sis, $consulta);

    while($fila = sqlsrv_fetch_array($query))
    {
        $info['id'] = $fila['id'];
        $info['usuario'] = $fila['usuario'];
        $info['password'] = $fila['password'];
        $info['email'] = $fila['email'];
        $data[$i] = $info;
       
        $i++;
    }
    echo json_encode($data);

     exec("git init",$output);

    print_r($output); 

    
}


?>