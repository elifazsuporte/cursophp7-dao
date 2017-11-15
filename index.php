<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

// BUSCA UM USUARIO
/*$usuario = new Usuarios();
$usuario->loadbyId(1);
echo $usuario;*/

// CARREGA TODOS OS USUARIOS
//$lista = Usuarios::getList();
//echo json_encode($lista);

// CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuarios::search("ad");
//echo json_encode($search);

// CARREGA UM USUÁRIO USANDO LOGIN E SENHA
$usuario = new Usuarios();
$usuario->login("admin", "admin");

echo $usuario;

 ?>