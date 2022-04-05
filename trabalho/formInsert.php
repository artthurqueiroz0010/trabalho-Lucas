<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Insert</title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2? family= Poppins:wght@200;800 & display=swap');
body{
	background-color: pink;
	color: #BCBCC1;
	font-family: 'Poppins', sans-serif;
}

div{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	align-items: center;
	text-align: center;
	background-color: gray;
	padding: 20px;
	border-radius: 20px;
	height: 260px;
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
</head>
<body>
	<div>
		<form action="insert.php" method="post">
		<h2>Cadastrar dados do cliente</h2>
		<p>nome: <input type="text" name="nome"></p>
		<p>e-mail: <input type="email" name="e-mail"></p>	
		<p>idade: <input type="number" name="idade"></p>

		<button type="submit"> Enviar Dados</button>
		
		</form>
	</div>
	

</body>
</html>