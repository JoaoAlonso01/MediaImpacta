<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/mediaComPai.css">
</head>
<form name="menu" method="post" action="">
	<center>
		<font size=5 color="white" face="arial">
			Ac1<input type="text" size=5 maxlength=2 name="ac1"><br>
			Ac2<input type="text" size=5 maxlength=2 name="ac2"><br>
			Ac3<input type="text" size=5 maxlength=2 name="ac3"><br>
			Nota Pai<input type="text" size=5 maxlength=10 name="pai"><br>
			Nota Prova<input type="text" size=5 maxlength=10 name="ntp" class="notaProva"><br>
			<input type="submit" name="enviar" value="Enviar" class="btn"><br>
			<input type="submit" name="Voltar" value="Voltar" class="btn"><br>
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
	echo " Nota final <input type='text' value=$notaFinal size=3 > ";
}

//Pagina Inicial
if (isset($_POST["Voltar"])) {
	header('Location: index.php');
}
?>