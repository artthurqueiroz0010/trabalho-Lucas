<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pesquisar no DB</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2? family= Poppins:wght@200;800 & display=swap');
body{
	background-color: pink;
	color: #BCBCC1;
	font-family: 'Poppins', sans-serif;
}
form{
	text-align: center;
}
input{
	background:transparent;
	border:1px #BCBCC1 solid;
	padding: 5px;
	color: white;
	padding: 10px;

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

	<form action="readInfo.php" method="post">
		<p><input type="text" name="nome" size="50"></p>
		<button type="submit">Pesquisar</button>
	</form>

</body>
</html>