<HTML>
<HEAD>
<link href="../SpryAssets/admin_member_info.css" rel="stylesheet" type="text/css"/>
</HEAD>
<BODY>
<?php 
$conn=mysql_connect("127.0.0.1","root","123456");
$select=mysql_select_db("onetube",$conn);
mysql_query("set names gbk");
if ($_GET{'M_ID'}!="") {
	$mid=$_GET{'M_ID'};
	$str="select * from member_info where M_ID=$mid";
	$arr=mysql_query($str);
	$result=mysql_fetch_array($arr);
?>
<table align="center" border=1   align="center" width=70% height=400px;>
  <tr><td class="table1_tr1" colspan=2 align="center" height=60px>会员基本信息</td></tr>
  <tr>
    <td>用户名：</td>
    <td><?php echo $result{"M_Name"};?></td>
  </tr>
  <tr>
    <td>密码：</td>
    <td><?php echo $result{"M_Password"};?></td>
  </tr>
  <tr>
    <td>密码保护问题：</td>
    <td><?php echo $result{"M_Question"};?></td>
  </tr>
  <tr>
    <td>密码保护答案：</td>
    <td><?php echo $result{"M_Answer"};?></td>
  </tr>
  <tr>
    <td>手机号：</td>
    <td><?php echo $result{"M_Card"};?></td>
  </tr>
  <tr>
    <td>邮箱：</td>
    <td><?php echo $result{"M_Address"};?></td>
  </tr>
  <tr>
    <td>消费总额：</td>
    <td><?php echo $result{"M_Money"};?></td>
  </tr>
  <tr>
    <td>余额：</td>
    <td><?php echo $result{"M_Blance"};?></td>
  </tr>
  <tr>
    <td>注册时间：</td>
    <td><?php echo $result{"M_CreateTime"};?></td>
  </tr>
  <tr><td colspan=2 align="center"><a href="javascript:history.back(-1);" target="_self">返回</a></td></tr>
</table>
<?php 
}
else {
	echo "<script>window.location.href='member_manager.php';</script>;";
}
?>	

</BODY>
</HTML>