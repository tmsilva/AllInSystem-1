<?php

include("../model/usuario.php");

$host = "localhost";
$user = "root";
$pass = "asd.123";
$banco = "allinsystem";

$conexao = new mysqli($host, $user, $pass, $banco);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}

require_once '../library/Doctrine v2.5.4/entity_manager.php';

$usuario = new Usuario();

$usuario->setNome($_POST['nome']);
//$usuario->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANATIZE_STRING));
$usuario->setEmail($_POST['email']);
$usuario->setUsername($_POST['username']);
$usuario->setSenha(password_hash($_POST['senha'], PASSWORD_DEFAULT));
$usuario->setAcesso(2);
$usuario->setEstado(1);

if (!empty($usuario))

$entityManager->persist($usuario);
$entityManager->flush();

echo "Registro cadastrado com Sucesso!";

