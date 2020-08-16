<?php
$str="exemplo de string para ser capitalizada";

$str= str_replace("exemplo","Exemplo", $str);
$str= str_replace("de","De", $str);
$str= str_replace("para","Para", $str);
$str= str_replace("ser","Ser", $str);
$str= str_replace("capitalizada","Capitalizada", $str);
$str= str_replace("string","String", $str);
echo $str;

?>