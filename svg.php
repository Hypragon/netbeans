<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require "funciones.php";
function suma(&$res, $sum){
    $res+=$sum;
}
$op1 = 7;
$op2 = 3;
suma($op1, $op2);
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <svg height="100" width="100">
             <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
            Sorry, your browser does not support inline SVG.  
        </svg> 
        <svg width="400" height="110">
            <rect width="300" height="100" style="fill:rgb(0,0,255);stroke-width:3;stroke:rgb(0,0,0)" />
            Sorry, your browser does not support inline SVG.  
        </svg>
        <?=$op1?>
    </body>
</html>
