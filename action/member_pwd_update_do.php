<HTML>
<BODY>
<?php 
//会员密码修改处理页
$conn=mysql_connect("127.0.0.1","root","123456");
$select=mysql_select_db("onetube",$conn);
mysql_query("set names gbk");
if ($_POST{'txt_password'}=="") {
	echo "<script>alert('请输入原密码！');window.location.href='../member_pwd_update.php';</script>;";
}
else if ($_POST{'txt_password1'}=="") {
		echo "<script>alert('请输入新密码！');window.location.href='../member_pwd_update.php';</script>;";
}
else if ($_POST{'txt_password1'}!=$_POST{'txt_password2'}) {
			echo "<script>alert('两次输入的密码不一致！');window.location.href='../member_pwd_update.php';</script>;";
}
else {
	$mid=$_POST{'txt_id'};
	$password=$_POST{'txt_password'};
	$newpassword=$_POST{'txt_password1'};
	
	$str="select * from member_info where M_ID=$mid and M_Password='$password'";//查询原密码是否正确
	$result=mysql_query($str);
	if (mysql_num_rows($result)>0) {
		$str="update member_info set M_Password='$newpassword' where M_ID=$mid";//更新密码
		$update=mysql_query($str);
		
		if ($update) {
			echo "<script>alert('密码修改成功！');window.location.href='../member_info.php';</script>;";
		}
		else {
			echo "<script>alert('密码修改失败！');window.location.href='../member_pwd_update.php';</script>;";
		}
	}
	else {
		echo "<script>alert('对不起，原密码错误！');window.location.href='../member_pwd_update.php';</script>;";
	}
}
	

?>
</BODY>
</HTML>