<html>
<BODY>
<?php 
//����Ա��Ӵ���ҳ��
$conn=mysql_connect("127.0.0.1","root","123456");
$select=mysql_select_db("onetube",$conn);
mysql_query("set names gbk");
if ($_POST{'txt_username'}!=""&&$_POST{'txt_password'}!="") {
	$username=$_POST{'txt_username'};
	$password=$_POST{'txt_password'};
	$email=$_POST{'txt_email'};
		
	$str="insert into Admin_info (A_UserName,A_Password,A_Email) value ('$username','$password','$email')";
	$insert=mysql_query($str);
	if ($insert) {
		
		echo "<script>alert('����Ա��ӳɹ���');window.location.href='../admin_manager.php';</script>;";
	}
	else {
		echo "<script>alert('����Ա���ʧ�ܣ�');window.location.href='../admin_manager.php';</script>;";
	}
}
else {
	echo "<script>alert('�������û��������룡');window.location.href='../main_manager.php';</script>;";
}
?>
</BODY>
</html>
