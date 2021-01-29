<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$arr = array(7, "siete", 8, "ocho", array("sorprendente", "array", "me he montado"), 15=> "quince", 30 => "treinta");
var_dump($arr);
$arr2 = [];
foreach($arr as $element){
    array_push($arr2, $element);
}
var_dump($arr2);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
