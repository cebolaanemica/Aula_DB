<?php
$idade = $_GET['idade'];
$cego = $_GET['cego'];


if($idade >= 18 && $cego == false) 
{
    echo 'Você já pode tirar sua carteira de motorista';
} 

else{
    echo 'Você não pode tirar sua carteira de motorista';
}


?>