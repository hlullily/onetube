<HTML>
<BODY>
<?php 
//��¼����ҳ��
$conn=mysql_connect("127.0.0.1","root","123456");
$select=mysql_select_db("onetube",$conn);
if ($_POST{'txt_username'}!=""&&$_POST{'txt_pwd'}!="") {
	$name=$_POST{'txt_username'};
	$pwd=$_POST{'txt_pwd'};
	
	$str="select * from member_info where M_Name='$name' and M_Password='$pwd'";
	$result=mysql_query($str);
	
	if (mysql_num_rows($result)>0) {
		session_start();
		$_SESSION{'member'}=$_POST{'txt_username'};
		echo "<script>window.location.href='../member_info.php';</script>;";
	}
	else {
		echo "<script>alert('�û������������');window.location.href='../member_login.php';</script>;";
	}
}
else {
	echo "<script>alert('�������û��������룡');window.location.href='../member_login.php';</script>;";
}
?>
</BODY>
</HTML>