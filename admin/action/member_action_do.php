<HTML>
<BODY>
<?php 
//会员信息综合处理页

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
		echo "<script>alert('操作成功！');window.location.href='../member_manager.php';</script>;";
	}
	else {
		echo "<script>alert('操作失败！');window.location.href='../member_manager.php';</script>;";
	}
}
else {
	echo "<script>alert('请重新选择要操作的会员信息！');window.location.href='../member_manager.php';</script>;";
}
?>
</BODY>
</HTML>