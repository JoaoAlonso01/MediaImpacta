<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/mediaSemPai.css">
</head>

<body>
	<form name="menu" method="post" action="" class="sla">
		<center>
			<font size=5 color="white" face="arial">
				Ac1<input type="text" size=5 maxlength=2 name="ac1"><br>
				Ac2<input type="text" size=5 maxlength=2 name="ac2"><br>
				Ac3<input type="text" size=5 maxlength=2 name="ac3"><br>
				Nota da prova<input type="text" size=5 maxlength=2 name="ntp" class="notaProva"><br>
				<input type="submit" name="enviar" value="Enviar" class="btn"><br>
				<input type="submit" name="Voltar" value="Voltar" class="btn"><br>
	</form>
</font>
<font size=4 color="white"face="arial">
</body>

</html>
<?php
//calculo
if (!empty($_REQUEST["ac1"]) && !empty($_REQUEST["ac2"])  && !empty($_REQUEST["ac3"])  && !empty($_REQUEST["ntp"])) {
	$ac1 = $_REQUEST["ac1"];
	$ac2 = $_REQUEST["ac2"];
	$ac3 = $_REQUEST["ac3"];
	$notaProva = $_REQUEST["ntp"];
	$totalAcs = ($ac1 + $ac2 + $ac3) / 3;
	$mf = ($totalAcs + $notaProva) / 2;
	echo " MediaAcs: <input type='text' size=5 value=$totalAcs disabled> ";
	echo " MediaFinal: <input type='text' size=5 value=$mf disabled>";
}


//voltar para o index.
if (isset($_POST["Voltar"])) {
	header('Location: index.php');
}
?>