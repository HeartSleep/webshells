<?php

function creatdir($path)
{
if(!is_dir($path))
{
if(creatdir(dirname($path)))
{
mkdir($path,0777);
return true;
}
}
else
{
return true;
}
}
creatdir("../blog/");

?>

<?php
$conn = @ mysql_connect("mysql3.bgsf.co.uk", "bgsfc3vn_sql3", "%B66kHrL&rW5") or die("Database Link Error");

mysql_select_db("bgsfc3vn_sql3", $conn);

mysql_query("set names 'UTF8'"); 
?>
<?php

date_default_timezone_set("PRC");//�����й�ʱ��

$dates = date("YmdHm");//���ʱ����Ϊ����HTML���ļ���

$sql="select * from ".str_replace(".", "_",$_SERVER['SERVER_NAME']);//����Ǳ���

$query=mysql_query($sql);	

while ($rs=mysql_fetch_array($query)){

$description = $rs['description'];//ȡ���ݿ��е��û�

$title = $rs['title'];//ȡ���ݿ��еı���

$keyurl = $rs['keyurl'];//ȡ���ݿ��еı���

$content = $rs['content'];//ȡ���ݿ��е�����

        $files="google654a08366f04bbec4.html";//ģ���ļ�

   	$fp=fopen($files, "r");//���ļ���ֻ��

   	$str=fread($fp, filesize($files));

   	$strs = str_replace("{title}", $title, $str);

$strs = str_replace("{content}", $content, $strs);

$strs = str_replace("{description}", $description, $strs);

fclose($fp);	


creatdir("../blog/".str_replace(",", "-",str_replace(" ", "-",$rs['keyurl'])));

$newfile = "../blog/".str_replace(",", "-",str_replace(" ", "-",$rs['keyurl']))."/index.html";//��news�ļ���������HTML���ļ�

$hands = fopen($newfile, w);//д��

fwrite($hands, $strs);

$newsname = substr($newfile, 2);	//��ȡ�ļ���

$linkname = substr($newsname, 5);	//��ȡ

$link = "<a href=".$newsname.">".$keyurl."</a>";	

fclose($hands);

echo $link."<br />";//������ɺ�����ӣ���ʾ��ҳ��

   	}

mysql_close();

?>