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
   
    createJSON($data);


    
}

function createJSON($data)
{
    $jsonencoded = json_encode($data,JSON_UNESCAPED_UNICODE);
    $fh = fopen("datos.json", 'w');
    fwrite($fh, $jsonencoded);
    fclose($fh);

    updateRepository();
}


function updateRepository()
{
    exec("git add .");
    exec('git commit -m "Update" ');
    exex('git push -u origin master',$output);
    print_r($output); 
}

?>