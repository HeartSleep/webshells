<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>From Chapolin</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Roboto', sans-serif;
		}
		#container {
			width: 800px;
			min-height: 400px;
			margin: 0 auto;
			border: 1px solid #D80F0A;
		}
		#topo {
			width: 100%;
			height: 50px;
			background: #D80F0A;
			text-align: center;
		}
		#box {
			width: 100%;
			min-height: 400px;
			background: #C20D09;
			padding: 10px 5px;

		}
		#campo1 {
			width: 450px;
			min-height: 300px;
			float: left;
			border: 1px solid #D80F0A;
			padding: 5px;
		}
		#campo2 {
			width: 300px;
			min-height: 300px;
			border: 1px solid #D80F0A;
			float: right;
			padding: 5px;
		}
		input[type="text"] {
			font-size: 16px;
		}
		input[type="text"]::placeholder{
			font-size: 16px;
		}
		textarea::placeholder{
			padding: 5px;
			font-size: 16px;
		}
		#campo3 {
			width: 57%;
			height: 50px;
			margin: 5px 0px;
			float: left;
		}
		#enviar {
			width: 100%;
			height: 50px;
			border: none;
			-webkit-border-radius: 3px;
			-moz-border-radius: 3px;
			-ms-border-radius: 3px;
			-o-border-radius: 3px;
			border-radius: 3px;
			background: #DD0903;
			background: linear-gradient(to top, #DD0903, #F4332E);
			background: -webkit-linear-gradient(to top, #DD0903, #F4332E);
			background: -moz-linear-gradient(to top, #DD0903, #F4332E);
			background: -ms-linear-gradient(to top, #DD0903, #F4332E);
			background: -o-linear-gradient(to top, #DD0903, #F4332E);
			cursor: pointer;
			color: #FFF;
			font-size: 20px;
			letter-spacing: 1px;
		}
		#enviar:hover{
			background: #CA3D39;
			background: linear-gradient(to top, #F4332E, #DD0903);
			background: -webkit-linear-gradient(to top, #F4332E, #DD0903);
			background: -moz-linear-gradient(to top, #F4332E, #DD0903);
			background: -ms-linear-gradient(to top, #F4332E, #DD0903);
			background: -o-linear-gradient(to top, #F4332E, #DD0903);
		}
		#campo4 {
			width: 38%;
			height: 50px;
			color: #FFF;
			float: right;
			margin: 5px 0;
			padding: 0 2px;
			text-align: center;
		}
	</style>
</head>
<body>

	<div id="container">
		<div id="topo">
			<label style="color:#FFF; line-height: 40px; font-size: 25px;">CHAPOLIN XTREME</label>
		</div>
		<div id="box">
				<div id="campo1">
					<form method="post" action="" name="form">
					<input type="hidden" name="veio" value="sim">
					<table width="100%" border="0" cellpadding="0" cellspacing="0">
						<tr height="45">
							<td width="60%"><input type="text" name="nome" id="nome" style="width: 98%; height: 40px; padding: 0 5px;" placeholder="NOME" autofocus required></td>
							<td width="40%"><input type="text" name="email" id="email" style="width: 100%; height: 40px; padding: 0 5px;" value="<?php echo $_SERVER['SERVER_ADMIN'] ?>" required></td>
						</tr>
						<tr height="45">
							<td width="100%" colspan="2"><input type="text" name="assunto" id="assunto" style="width: 100%; height: 40px; padding: 0 5px;" placeholder="ASSUNTO" required></td>
						</tr>
						<tr height="278">
							<td width="100%" colspan="2" valign="button">
								<textarea id="engenharia" name="engenharia" style="width: 100%; height: 250px; font-size: 16px; resize: none;" placeholder="ENGENHARIA" required></textarea>
							</td>
						</tr>
					</table>
				</div>
				<div id="campo2">
					<div style="width: 100%; height: 35px; text-align: center;">
						<span style="line-height: 30px; color:#FFF;">LISTA DE E-MAIL</span>
					</div>
					<div style="width: 100%; height: 330px;">
						<textarea id="lista" name="lista" style="width: 100%; height: 328px; resize: none; font-size: 16px;" required></textarea>
					</div>
				</div>			
			<div style="clear: both;"></div>
			<div id="campo3">
				<input type="submit" name="enviar" id="enviar" value="ENVIAR">
			</div>
			</form>
			<div id="campo4">
			<span>Vencedores também perdem, mas a diferença é que eles não desistem.</span>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>

</body>
</html>
<?php
$testa = $_POST['veio'];
if($testa != "") {
	$nm = $_POST['nome'];
	$subject = $_POST['assunto'];
	$message = $_POST['engenharia'];
	$email = $_POST['email'];
	$to = $_POST['lista'];
	$name = explode(",", $nm);
	$email = explode("\n", $to);
	$message = stripslashes($message);
	$rname = rand(0, count($name));
	$name = $name[$rname];
	$admin = $_SERVER['SERVER_ADMIN'];
	$i = 0;
	$count = 1;
	while($email[$i]) {
		$ok = "ok";
		$gera = rand(1111111,9999999);
		$codig  = "<font color=#FFFFFF size=2>$gera</font>";
		$headers  = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "X-Mailer: Microsoft Office Outlook, Build 17.551210\n";
		$headers .= "Content-Transfer-encoding: 8bit\n";
		$headers .= "From: ".$name." <".$admin.">\n";
		$headers .= "Reply-To: $admin\n";
		$headers .= "Return-Path: $admin\n";
		$headers .= "X-Mailer: iGMail [www.ig.com.br]\n";
		$headers .= "X-Originating-Email: $admin\n";
		$headers .= "X-Sender: $admin\n";
		$headers .= "X-Priority: 3\n";
		$headers .= "X-iGspam-global: Unsure, spamicity=0.570081 - pe=5.74e-01 - pf=0.574081 - pg=0.574081\r\n";
		if(
			mail($email[$i], $subject." REF: ".$gera."", $message."<br>".$codig,  $headers)
		)
			echo "<center><font color='green' size='4'>* N.: $count <b>".$email[$i]."</b> <font color=black>ENVIADO</font><br></center>";
		else
			echo "<center><font color='#D80F0A' size='4'>* N.: $count <b>".$email[$i]."</b> <font color=red>ERRO AO ENVIAR</font><br></center>";
		$i++;
		$count++;
	}
	$count--;
	if($ok == "ok")
	echo "<center>[Fim do Envio]</center>"; 

}
?>