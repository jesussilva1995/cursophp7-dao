<?php 

	require_once("config.php");

	//Consulta directa pela classe SQL
	//$sql = new Sql();
	//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//echo json_encode($usuarios);

	//Carrega um usuario
	//$root = new Usuario();
	//$root->loadbyId(3);
	//echo $root;

	//Carrega uma lista de usuarios
	//$lista = Usuario::getList(); /*Maneira de chamar metodos estaticos*/
	//echo json_encode($lista);


	//Carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("jo");
	//echo json_encode($search);

	//Carrega um usuário usando o login e a senha
	//$usuario = new Usuario();
	//$usuario->login("sqlserver","alb2c3");
	//echo $usuario;

	//Insert de novo usuario usando stored procedure
	$aluno = new Usuario("joaopedro","aluno");

	$aluno->insert();

	echo $aluno;

 ?>