<HTML>
<BODY>
<?php 
$conn=mysql_connect("127.0.0.1","root","123456");
$select=mysql_select_db("onetube",$conn);
if ($_GET{"A_ID"}!="") {
	$aid=$_GET{"A_ID"};
	$str="delete from admin_info where A_ID=".$aid;
	$delete=mysql_query($str);
	if ($delete) {
		echo "<script>alert('����Ա��Ϣɾ���ɹ���');window.location.href='../admin_manager.php';</script>;";
	}
	else {
		echo "<script>alert('����Ա��Ϣɾ��ʧ�ܣ�');window.location.href='../admin_manager.php';</script>;";
	}
}
else {
	echo "<script>alert('��ѡ��Ҫɾ���Ĺ���Ա��Ϣ��');window.location.href='../admin_manager.php';</script>;";
}
?>
</BODY>
</HTML>