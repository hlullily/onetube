<HTML>
<BODY>
<?php 
//����Ա��Ϣ�޸Ĵ���ҳ
$conn=mysql_connect("127.0.0.1","root","123456");
$select=mysql_select_db("onetube",$conn);
mysql_query("set names gbk");
if ($_POST{'txt_password'}!="") {
	$aid=$_POST{"txt_id"};
	$password=$_POST{"txt_password"};
	$email=$_POST{"txt_email"};
	$str="update admin_info set A_Password='$password',A_Email='$email' where A_ID=".$aid;
	$update=mysql_query($str);
	if ($update) {
		echo "<script>alert('����Ա��Ϣ�޸ĳɹ���');window.location.href='../admin_manager.php';</script>;";
	}
	else {
		echo "<script>alert('����Ա��Ϣ�޸�ʧ�ܣ�');window.location.href='../admin_manager.php';</script>;";
	}
}
else {
	echo "<script>alert('���������Ա���룡');window.location.href='../admin_manager.php';</script>;";
}
?>
</BODY>
</HTML>