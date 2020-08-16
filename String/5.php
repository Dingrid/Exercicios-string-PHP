<?php
$texto= "Exemplo de string de teste.";
$inicio= strpos($texto,"g");
$fim= strpos($texto, ".", $inicio);
$x= substr($texto, $inicio+1, $fim-$inicio-1);
echo $x;
?>