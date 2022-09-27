<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/MediaQuerys/MediaQueryComPai.css">
	<link rel="stylesheet" href="css/mediaComPai.css">
</head>
<body>
<form name="menu" method="post" action="">
	<center>
		<h2><font color="white">
			Ac1<input type="number" name="ac1" min="0" max="10" step="0.01" required><br>
			Ac2<input type="number" name="ac2" min="0" max="10" step="0.01" required><br>
			Ac3<input type="number" name="ac3" min="0" max="10" step="0.01" required><br>
			Nota Prova<input type="number" name="ntp" class="notaProva" min="0" max="10" step="0.01" required><br>
			Nota Pai<input type="number" name="pai" class="notaPai" min="0" max="10" step="0.01" required><br>
			<input type="submit" name="enviar" value="Enviar" class="btn"><br>
			<input type="button" name="Voltar" value="Voltar" class="btn" onclick="location.href='index.php';"><br>
</font></h2>
</form>
</body>
</html>
<?php
//Calculo
if (!empty($_REQUEST["ac1"]) && ($_REQUEST["ac2"]) && !empty($_REQUEST["ac3"]) && ($_REQUEST["pai"]) && ($_REQUEST["ntp"])) {
	$ac1 = $_REQUEST["ac1"];
	$ac2 = $_REQUEST["ac2"];
	$ac3 = $_REQUEST["ac3"];
	$notaProva = $_REQUEST["ntp"];
	$notaPai = $_REQUEST["pai"];
	$totalAcs = ($ac1 + $ac2 + $ac3) / 3 * 0.3;
	$notaProva *=  0.4;
	$notaPai *= 0.3;
	$notaFinal = $totalAcs + $notaProva + $notaPai;
	echo " Media final: <input type='text' value=$notaFinal size=3 readonly> ";
}
?>