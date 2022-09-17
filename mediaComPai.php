<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body bgcolor="pink">
	<form name="menu" method="post" action="">
		<center>
			<font size=5 color="blue" face="arial">
				Código do Produto<input type="text" size=5 maxlength=10 name="txtpro" style="font-size=16px; color:red;"><br>
				Descrição<input type="text" size=5 maxlength=10 name="txtdes" style="font-size=16px; color:red;"><br>
				Valor R$<input type="text" size=5 maxlength=10 name="txtval" style="font-size=16px; color:red;"><br>
				Taxa de Desconto %<input type="text" size=5 maxlength=10 name="txtju" style="font-size=16px; color:red;"><br>
				<input type="submit" name="enviar" value="Enviar" style="font-size=16px; color:red;"><br>
				<input type="submit" name="Voltar" value="Voltar" style="font-size=16px; color:red;"><br>
	</form>
</body>

</html>
<?php

if (!empty($_REQUEST["txtval"]) && ($_REQUEST["txtju"])) {
	$val = $_REQUEST["txtval"];
	$ju = $_REQUEST["txtju"];
	$r = ($ju / 100) * $val;
	$t = $val - $r;
	echo " Total R$: <input type='text' value=$t size=3 > ";
}
if (isset($_POST["Voltar"])) {
	header('Location: index.php');
}
?>