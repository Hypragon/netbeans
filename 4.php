<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$notas = array_fill(0, 15, 0);
$total = 0;
foreach($notas as &$nota){
    $nota = rand(5, 10);
    $total+= $nota;
}
var_dump($notas);
$max = max($notas);
$min = min($notas);
$media = $total / count($notas);
//$notas2 = array_fill(0, 15, rand(5, 10));
$notas2 = [];
for ($i = 0; $i < 15; $i++){
    array_push($notas2, rand(5,10));
}
$notas = array_merge($notas, $notas2);
$max2 = max($notas);
$min2 = min($notas);
$media2 = $total / count($notas);
$muchoTexto = '';
reset($notas);
for ($i = 0; $i < count($notas); $i++){
    $muchoTexto .= '<p>En la posición '.key($notas).' está la nota '.current($notas).'</p>';
    next($notas);
}
$pos = array_search(10, $notas);
$once = array_search(11, $notas);
$cuatro = array_search(4, $notas);
sort($notas);
var_dump($notas);
rsort($notas);
var_dump($notas);
$notas = array_unique($notas);
var_dump($notas);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>La nota máxima es <?=$max?></p>
        <p>La nota mínima es <?=$min?></p>
        <p>La nota media es <?=$media?></p>
        <p>La nota máxima 2 es <?=$max2?></p>
        <p>La nota mínima 2 es <?=$min2?></p>
        <p>La nota media 2 es <?=$media2?></p>
        <?=$muchoTexto?>
        <p>El primer diez se encuentra en la posición <?=$pos?></p>
        <?php
        /*if($once){
            echo '<p>Hay onces en el array</p>';
        } else {
            echo '<p>No hay onces en el array</p>';
        }
        if($cuatro){
            echo '<p>Hay cuatros en el array</p>';
        } else {
            echo '<p>No hay cuatros en el array</p>';
        }*/
        echo $once ? '<p>Hay onces en el array</p>' : '<p>No hay onces en el array</p>';
        echo $cuatro ? '<p>Hay cuatros en el array</p>' : '<p>No hay cuatros en el array</p>';
        ?>
    </body>
</html>
