<?php 

$id = $_GET['id'];

include_once("conect.php");

include_once("Crud.php");

$obj = new Crud($conect);

$dados = $obj->readInfo($id);

//var_dump($dados);


 ?>

 <form action="update.php" method="post">
 	<h2>Editar Informações</h2>
 	<p>nome:<input type="text" name="pessoa" value="<?=$dados->nome;?>"></p>
 	<p>idade:<input type="number" name="idade" value="<?=$dados->idade;?>"></p>
 	<p>email:<input type="email" name="email" value="<?=$dados->email;?>"></p>
 	<input type="hidden" name="id" value="<?=$dados->id;?>">
	<center><button type="submit">Alterar Dados</button></center>
 </form>

 <style type="text/css">
 	@import url('https://fonts.googleapis.com/css2? family= Poppins:wght@200;800 & display=swap');
body{
	background-color: pink;
	color: #BCBCC1;
	font-family: 'Poppins', sans-serif;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

form{
	background-color: gray;
	padding: 20px;
	border-radius: 20px;
	box-shadow: 15px 15px 18px -4px #0D0D0D;

}	

input{
	background:transparent;
	border:1px #BCBCC1 solid;
	padding: 5px;
	color: white;
}

button{

	background:transparent;
	border:1px #BCBCC1 solid;
	padding: 5px;
	color: #BCBCC1;
	border-radius: 10px;
	padding: 10px;

}
button:hover{
	background-color: #BCBCC1;
	color: black;
	transition: 0.5s;
}
 </style>

