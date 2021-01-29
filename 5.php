<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$array=[
"https://es.wikieducator.org/images/3/3d/Ajax_cliente_servidor.png",
"https://es.wikieducator.org/images/7/7b/Funcionamiento_ajax.png",
"https://es.wikieducator.org/images/a/aa/Angular_app_base.png",
"https://es.wikieducator.org/images/3/3d/Docker_distancia_1.png",
"https://es.wikieducator.org/images/4/4e/Opcion_Instalar.png",
"https://es.wikieducator.org/images/a/ab/AplicacionWeb.png",
"https://es.wikieducator.org/images/e/e4/Red3.png",
"https://es.wikieducator.org/images/f/f2/DACTW.png",
"https://es.wikieducator.org/images/e/e5/M3_web.png",
"https://es.wikieducator.org/images/a/a6/Ficheros.jpeg"];
//var_dump(sizeof($array));
for($i = 0; $i < 3; $i++){
    $random = rand(0, sizeof($array)-1);
    if(isset($array[$random])){
       $imagenes[$i] = $array[$random];
    unset($array[$random]); 
    } else {
        $i--;
    }
    
}
//var_dump($array);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <META HTTP-EQUIV=Refresh CONTENT="5; URL=<?=$_SERVER['PHP_SELF']?>">
        <title></title>
    </head>
    <body>
        <img src="<?=$imagenes[0]?>"/>
        <img src="<?=$imagenes[1]?>"/>
        <img src="<?=$imagenes[2]?>"/>
    </body>
</html>
