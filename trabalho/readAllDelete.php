<?php 
include_once("conect.php");

include_once("Crud.php");

$obj = new Crud($conect);

$obj->readInfo();

$dados = $obj->getAll();

//var_dump($dados);

echo"<table border='1'>";
echo"<tr><th>id</th> <th>nome</th> <th>idade</th> <th>e-mail</th> <th>data</th><th>excluir</th></tr>";
foreach ($dados as $info) {
	echo"<tr><th>".$info['id']."</td>
    <td>".$info['nome']."</td>
	<td>".$info['idade']."</td>
	<td>".$info['email']."</td>
	<td>".$info['data_now']."</td>
	<td><a href=delete.php?id=".$info['id']."> Excluir </a></td>
	</tr>";
	


}
echo "</table>";

?>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css2? family= Poppins:wght@200;800 & display=swap');
body{
	background-color: pink;
	color: #BCBCC1;
	font-family: 'Poppins', sans-serif;
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%, -50%);

}
a{
	text-decoration: none;
	color: #BCBCC1;
}
</style>