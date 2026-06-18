<?php

$usuario_cadastrado = "admin";
$senha_correta = "1234";

$tentativa_usuario = "Bruno";
$tentativa_senha = "2222";

$acesso_conscedido = false;


if($usuario_cadastrado == $tentativa_usuario &&
$senha_correta == $tentativa_senha){
   $acesso_conscedido = true;
}

var_dump($acesso_conscedido);

?>