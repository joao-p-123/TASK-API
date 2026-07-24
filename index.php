<?php

require_once "autoload.php";

$usuario = new Usuario();

$usuario->setNome("João Pedro");
$usuario->setEmail("joao@email.com");

echo $usuario->getNome();

echo "<br>";

echo $usuario->getEmail();