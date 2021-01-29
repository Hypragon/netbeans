<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$usuarios = (filter_input(INPUT_POST, 'usuarios')) !== null ? unserialize(filter_input(INPUT_POST, 'usuarios')) : [];
if(!empty(filter_input(INPUT_POST, 'click')) && !empty(filter_input(INPUT_POST, 'user'))){
    $user = filter_input(INPUT_POST, 'user');
    if(array_key_exists($user, $usuarios)){
        $usuarios[$user]++;
    } else {
        $usuarios[$user] = 1;
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="hidden" name="usuarios" value="<?=htmlspecialchars(serialize($usuarios))?>"/>
            Introduzca su nombre de usuario:<br/>
            <input type="text" name="user"/>
            <input type="submit" name="click" value="Haga click"/>
        </form>
        <?php
        if(!empty($user)){
            echo "El usuario $user ha clickado $usuarios[$user] veces.";     
        }
        ?>
    </body>
</html>
