<?php 
include_once("conect.php");

include_once("Crud.php");

//$obj = new Crud($conect);

//$dado = $obj->readInfo(1);

//var_dump($dado);

//echo $dado->id." - ".$dado->nome." - ".$dado->idade." - ".$dado->email." - ".$dado->data_now;

//$obj->readInfo();
//$dado = $obj->getAll();
//var_dump($dado);

//foreach ($dado as $info) {
	//echo $info['id']." - ".$info['nome']." - ".$info['idade']." - ".$info['email']." - ",$info['data_now']."<br>";
//}


// echo"<table border='1'>";
// echo"<tr><th>id</th> <th>nome</th> <th>idade</th> <th>e-mail</th> <th>data</th></tr>";
// foreach ($dado as $info) {
// 	echo"<tr><th>".$info['id']."</td>
//     <td>".$info['nome']."</td>
// 	<td>".$info['idade']."</td>
// 	<td>".$info['email']."</td>
// 	<td>".$info['data_now']."</td></tr>";


// }
// echo "</table>";

$nome = $_POST['nome'];
$obj = new Crud($conect);
$dado = $obj->readInfo($nome);

// var_dump($dado);

echo"<table border='1'>";
echo"<tr><th>id</th> <th>nome</th> <th>idade</th> <th>e-mail</th> <th>data</th></tr>";

	echo"<tr><th>".$dado['id']."</td>
    <td>".$dado['nome']."</td>
	<td>".$dado['idade']."</td>
	<td>".$dado['email']."</td>
	<td>".$dado['data_now']."</td></tr>";



echo "</table>";



?>