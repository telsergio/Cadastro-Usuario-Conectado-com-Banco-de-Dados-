<?php

$val = $_GET["value"];
    
$server = "localhost";
$user   = "root";
$pass   = "";
$db     = "consulta_cidade";

$conn   = new mysqli($server, $user, $pass, $db);
$conn->set_charset("utf8");
$val_M = mysqli_real_escape_string($conn, $val);

$sql="SELECT nome_cidade 
from cidades c
inner join estado e on c.estado = e.id
where e.uf = '$val_M'";

if ($result = mysqli_query($conn,$sql))
{
    $numero_de_linhas = mysqli_num_rows($result);    

    if ($numero_de_linhas>0){

        echo "<select  name='cidade';>";
                
        while ($rows = mysqli_fetch_assoc($result)) {
            echo "<option>".$rows["nome_cidade"]."</option>";
        }

        echo "</select>";
    }
}
?>
