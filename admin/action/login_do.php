
<HTML>
<BODY>
<?php 
if ($_POST{'txt_username'}!=""&&$_POST{'txt_password'}!="") {
	$name=$_POST{'txt_username'};
	$pwd=$_POST{'txt_password'};
	
	$conn=mysql_connect("127.0.0.1","root","123456");
	$select=mysql_select_db("onetube",$conn);
	mysql_query("set names gbk");
	$str="select * from Admin_info where A_UserName='$name' and A_Password='$pwd'";
	$arr=mysql_query($str);
	echo mysql_error();
	if (mysql_num_rows($arr)>0) {
		session_start();
		$_SESSION{'user'}=$_POST{'txt_username'};
		echo "<script>window.location.href='../main.php';</script>;";
	}
	else {
		echo "<script>alert('用户名或密码错误');window.location.href='../login.php';</script>;";
	}
}
else {
	echo "<script>alert('请输入用户名和密码');window.location.href='../login.php';</script>;";
}
?>
</BODY>
</HTML>