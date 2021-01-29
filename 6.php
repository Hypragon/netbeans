<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$productos = [
 'lechuga' => ['unidades' => 200,
 'precio' => 0.90],
 'tomates' =>['unidades' => 2000,
 'precio' => 2.15],
 'cebollas' =>['unidades' => 3200,
 'precio' => 0.49], 
 'fresas' =>['unidades' => 4800,
 'precio' => 4.50],
 'manzanas' =>['unidades' => 2500,
 'precio' => 2.10],
];
if(filter_input(INPUT_POST, 'comprar') !== null){
    $productos = unserialize(filter_input(INPUT_POST, 'productos'));
    $compra = [
        'lechuga' => intval(filter_input(INPUT_POST, 'lechuga')),
        'tomates' => intval(filter_input(INPUT_POST, 'tomates')),
        'cebollas' => intval(filter_input(INPUT_POST, 'cebollas')),
        'fresas' => intval(filter_input(INPUT_POST, 'fresas')),
        'manzanas' => intval(filter_input(INPUT_POST, 'manzanas'))
        
    ];
    $total = 0;
    $falta = '';
    foreach($productos as $key => &$value){
        if(!empty($value['unidades'])){
            if($value['unidades'] > $compra[$key]){
                $total+= $compra[$key] * $value['precio'];
                $value['unidades'] -= $compra[$key];
            } else {
                $total+= $value['unidades'] * $value['precio'];
                $falta.= "No había $compra[$key] unidades de $key, por lo que has comprado las ".$value['unidades']." que quedaban.<br/>";
                $value['unidades'] = 0;
            }
        } 
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input type="hidden" name="productos" value="<?php echo htmlspecialchars(serialize($productos))?>">
            <p>Hay <?=$productos['lechuga']['unidades']?> lechugas</p>
            <p>¿Cuántas lechugas quiere?: <input type="number" name="lechuga"/></p>
            <p>Hay <?=$productos['tomates']['unidades']?> tomates</p>
            <p>¿Cuántas tomates quiere?: <input type="number" name="tomates"/></p>
            <p>Hay <?=$productos['cebollas']['unidades']?> cebollas</p>
            <p>¿Cuántas cebollas quiere?: <input type="number" name="cebollas"/></p>
            <p>Hay <?=$productos['fresas']['unidades']?> fresas</p>
            <p>¿Cuántas fresas quiere?: <input type="number" name="fresas"></p>
            <p>Hay <?=$productos['manzanas']['unidades']?> manzanas</p>
            <p>¿Cuántas manzanas quiere?: <input type="number" name="manzanas"/></p>
            <input type="submit" name="comprar" value="Comprar"/><br/>
            <?php
            if(!empty($falta)){
                echo $falta;
            }
            if(isset($total)){
                echo "Has gastado $total €";
            }
            
            ?>
        </form>
    </body>
</html>
