<?php 

require_once("config.php");


/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*
// Carrega um usuario
$root = new Usuario();
$root->loadByID(3);
echo $root;
*/

/*
//Carrega uma Lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);
 */

/*
//Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);
*/

// Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("Usuario","123");
echo $usuario;


 ?>

