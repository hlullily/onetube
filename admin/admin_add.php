<?php session_start();?>
<HTML>
<head>
<link href="../SpryAssets/admin_member_info.css" rel="stylesheet" type="text/css"/>
</head>
<BODY>
<?php 
  if ($_SESSION{'user'}=="") {
  	echo "<script>alert('��¼��ʱ�������µ�¼��');window.location.href='login.php';</script>;";
  } 
?>
<FORM action="action/admin_add_do.php" method="post">
<table width=500px align="center">
   <tr><td class="table1_tr2" colspan=2 align="center" height=50px;>��ӹ���Ա</td></tr>
   <tr style="line-height:50px;">
      <td align="center"><font color=red>*</font>�û�����</td>
      <td align="center"><input style="width: 300px; height:30px;" type="text" name="txt_username" /></td>
   </tr>
   <tr style="line-height:50px;">
      <td align="center"><font color=red>*</font>���룺</td>
      <td align="center"><input style="width: 300px; height:30px;" type="password" name="txt_password" /></td>
   </tr>
   <tr style="line-height:50px;">
      <td align="center">���䣺</td>
      <td align="center"><input style="width: 300px; height:30px;" type="text" name="txt_email" /></td>
   </tr>
   <tr><td colspan=2 align="center"><input style="width: 100px; height:30px; margin-top:20px;"  type="submit" name="Submit" value="���" /></td></tr>
 </table>
</FORM>
</BODY>
</HTML>