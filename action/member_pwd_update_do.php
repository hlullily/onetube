<HTML>
<BODY>
<?php 
//��Ա�����޸Ĵ���ҳ
$conn=mysql_connect("127.0.0.1","root","123456");
$select=mysql_select_db("onetube",$conn);
mysql_query("set names gbk");
if ($_POST{'txt_password'}=="") {
	echo "<script>alert('������ԭ���룡');window.location.href='../member_pwd_update.php';</script>;";
}
else if ($_POST{'txt_password1'}=="") {
		echo "<script>alert('�����������룡');window.location.href='../member_pwd_update.php';</script>;";
}
else if ($_POST{'txt_password1'}!=$_POST{'txt_password2'}) {
			echo "<script>alert('������������벻һ�£�');window.location.href='../member_pwd_update.php';</script>;";
}
else {
	$mid=$_POST{'txt_id'};
	$password=$_POST{'txt_password'};
	$newpassword=$_POST{'txt_password1'};
	
	$str="select * from member_info where M_ID=$mid and M_Password='$password'";//��ѯԭ�����Ƿ���ȷ
	$result=mysql_query($str);
	if (mysql_num_rows($result)>0) {
		$str="update member_info set M_Password='$newpassword' where M_ID=$mid";//��������
		$update=mysql_query($str);
		
		if ($update) {
			echo "<script>alert('�����޸ĳɹ���');window.location.href='../member_info.php';</script>;";
		}
		else {
			echo "<script>alert('�����޸�ʧ�ܣ�');window.location.href='../member_pwd_update.php';</script>;";
		}
	}
	else {
		echo "<script>alert('�Բ���ԭ�������');window.location.href='../member_pwd_update.php';</script>;";
	}
}
	

?>
</BODY>
</HTML>