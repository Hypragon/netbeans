<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$paises = ["españa", "francia", "italia", "alemania", "portugal"];
$paises = ["españa" => "madrid", "francia" => "paris", "italia" => "roma", "alemania" => "berlin", "portugal" => "lisboa"];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($paises as $key => $value){
            echo "La capital de $key es $value</br>"; 
        }
        ?>
    </body>
</html>
//comentario para despliegueç

