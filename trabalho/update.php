<?php 

$nome = $_POST['pessoa'];
$idade = $_POST['idade'];
$email = $_POST['email'];

$id = $_POST['id'];

// echo $nome." - ".$idade." - ".$email." - ".$id."<br>";

include_once("conect.php");

include_once("Crud.php");
$obj = new Crud($conect);

$obj->update($id,$nome,$idade,$email);

 ?>

 <style type="text/css">
 	 	@import url('https://fonts.googleapis.com/css2? family= Poppins:wght@200;800 & display=swap');
body{
	background-color: #262626;
	color: #BCBCC1;
	font-family: 'Poppins', sans-serif;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

a{
	text-decoration: none;
	color: #BCBCC1;

}

 </style>