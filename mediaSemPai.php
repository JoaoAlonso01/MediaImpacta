<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/MediaQuerys/MediaQuerySemPai.css">
	<link rel="stylesheet" href="css/mediaSemPai.css">
</head>

<body>
	<form name="menu" method="post" action="" class="sla">
		<center>
			<font size=5 color="white" face="arial">
				Ac1<input type="number" name="ac1" min="0" max="10" step="0.01" required><br>
				Ac2<input type="number" name="ac2" min="0" max="10" step="0.01" required><br>
				Ac3<input type="number" name="ac3" min="0" max="10" step="0.01" required><br>
				Nota da prova<input type="number" name="ntp" class="notaProva" min="0" max="10" step="0.01" required><br>
				<input type="submit" name="enviar" value="Enviar" class="btn"><br>
				<input type="button" name="Voltar" value="Voltar" class="btn" onclick="location.href='index.php';"><br>
				</font>
			</form>
	<font size=4 color="white" face="arial">
</body>

</html>
<?php
//calculo
if (!empty($_REQUEST["ac1"]) && !empty($_REQUEST["ac2"])  && !empty($_REQUEST["ac3"])  && !empty($_REQUEST["ntp"])) {
	$ac1 = $_REQUEST["ac1"];
	$ac2 = $_REQUEST["ac2"];
	$ac3 = $_REQUEST["ac3"];
	$notaProva = $_REQUEST["ntp"];
	$totalAcs = ($ac1 + $ac2 + $ac3) / 3 * 0.5;
	$notaProva *= 0.5;

	$mf = ($totalAcs + $notaProva);
	echo " MediaFinal: <input type='text' size=5 value=$mf readonly>";
}
?>