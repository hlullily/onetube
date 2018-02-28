<html>
<BODY>
<?php 
//管理员添加处理页面
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
		
		echo "<script>alert('管理员添加成功！');window.location.href='../admin_manager.php';</script>;";
	}
	else {
		echo "<script>alert('管理员添加失败！');window.location.href='../admin_manager.php';</script>;";
	}
}
else {
	echo "<script>alert('请输入用户名和密码！');window.location.href='../main_manager.php';</script>;";
}
?>
</BODY>
</html>
