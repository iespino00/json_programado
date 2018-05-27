<?php

$datos = file_get_contents("datos.json");
$json = json_decode($datos, true);


echo '<table style="width:100%" style= "border: 1px solid black">
    <tr>
         <th>Id</th>
         <th>User</th> 
         <th>email</th>
    </tr>      
';
foreach ($json as $user) 
{
    echo '<tr>
              <th>'.$user['id'].'</th>
              <th>'.$user['usuario'].'</th>
              <th>'.$user['email'].'</th>
          </tr>';
   // print_r ($user);
}
echo '</table>';
?>