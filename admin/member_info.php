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
  <tr><td class="table1_tr1" colspan=2 align="center" height=60px>��Ա������Ϣ</td></tr>
  <tr>
    <td>�û�����</td>
    <td><?php echo $result{"M_Name"};?></td>
  </tr>
  <tr>
    <td>���룺</td>
    <td><?php echo $result{"M_Password"};?></td>
  </tr>
  <tr>
    <td>���뱣�����⣺</td>
    <td><?php echo $result{"M_Question"};?></td>
  </tr>
  <tr>
    <td>���뱣���𰸣�</td>
    <td><?php echo $result{"M_Answer"};?></td>
  </tr>
  <tr>
    <td>�ֻ��ţ�</td>
    <td><?php echo $result{"M_Card"};?></td>
  </tr>
  <tr>
    <td>���䣺</td>
    <td><?php echo $result{"M_Address"};?></td>
  </tr>
  <tr>
    <td>�����ܶ</td>
    <td><?php echo $result{"M_Money"};?></td>
  </tr>
  <tr>
    <td>��</td>
    <td><?php echo $result{"M_Blance"};?></td>
  </tr>
  <tr>
    <td>ע��ʱ�䣺</td>
    <td><?php echo $result{"M_CreateTime"};?></td>
  </tr>
  <tr><td colspan=2 align="center"><a href="javascript:history.back(-1);" target="_self">����</a></td></tr>
</table>
<?php 
}
else {
	echo "<script>window.location.href='member_manager.php';</script>;";
}
?>	

</BODY>
</HTML>