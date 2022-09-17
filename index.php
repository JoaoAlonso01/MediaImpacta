<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/MediaQueryIndex.css">
</head>

<body>
	<h1>Calculador de média da Faculdade Impacta</h1>
	<center>
		<img src="images/impacta.png" class="logo">
		<form name="menu" method="post" action="">
			<center>
				<input type="submit" name="botao1" value="Média sem pai" class="btn"><br>
				<input type="submit" name="botao2" value="Média com pai" class="btn"><br>
			</center>
		</form>
</body>

</html>
<?php
if (isset($_POST["botao1"])) {
	header('Location: mediaSemPai.php');
}
if (isset($_POST["botao2"])) {
	header('Location: mediaComPai.php');
}
?>