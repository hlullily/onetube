<HTML>
<BODY>
<?php 
//��Ա��Ϣ�޸Ĵ���ҳ
$conn=mysql_connect("127.0.0.1","root","123456");
$select=mysql_select_db("onetube",$conn);
mysql_query("set names gbk");
if ($_POST{'txt_id'}!="") {
	$mid=$_POST{'txt_id'};
	$card=$_POST{'txt_card'};
	$address=$_POST{'txt_address'};
	
	$str="update member_info set M_Card='$card',M_Address='$address' where M_ID=$mid";
	$update=mysql_query($str);
	
	if ($update) {
		echo "<script>alert('��Ա��Ϣ�޸ĳɹ���');window.location.href='../member_info.php';</script>;";
	}
	else {
		echo "<script>alert('��Ա��Ϣ�޸�ʧ�ܣ�');window.location.href='../member_update.php';</script>;";
	}
}
else {
	echo "<script>alert('������ѡ��Ҫ�޸ĵĻ�Ա��Ϣ��');window.location.href='../member_update.php';</script>;";
}
?>
</BODY>
</HTML>