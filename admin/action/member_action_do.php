<HTML>
<BODY>
<?php 
//��Ա��Ϣ�ۺϴ���ҳ

if ($_GET{'M_ID'}!=""&&$_GET{'Type'}!="") {
	$mid=$_GET{'M_ID'};
	$type=$_GET{'Type'};
	$conn=mysql_connect("127.0.0.1","root","123456");
	$select=mysql_select_db("onetube",$conn);
	$str="";
	switch ($type){
		case "1":$str="update member_info set M_Status=1 where M_ID=".$mid;break;
		case "2":$str="update member_info set M_Status=2 where M_ID=".$mid;break;
		case "3":$str="delete from member_info where M_ID=".$mid;break;
	}
	$i=mysql_query($str);
	if ($i) {
		echo "<script>alert('�����ɹ���');window.location.href='../member_manager.php';</script>;";
	}
	else {
		echo "<script>alert('����ʧ�ܣ�');window.location.href='../member_manager.php';</script>;";
	}
}
else {
	echo "<script>alert('������ѡ��Ҫ�����Ļ�Ա��Ϣ��');window.location.href='../member_manager.php';</script>;";
}
?>
</BODY>
</HTML>