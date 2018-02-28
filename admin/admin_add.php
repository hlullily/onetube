<?php session_start();?>
<HTML>
<head>
<link href="../SpryAssets/admin_member_info.css" rel="stylesheet" type="text/css"/>
</head>
<BODY>
<?php 
  if ($_SESSION{'user'}=="") {
  	echo "<script>alert('登录超时，请重新登录！');window.location.href='login.php';</script>;";
  } 
?>
<FORM action="action/admin_add_do.php" method="post">
<table width=500px align="center">
   <tr><td class="table1_tr2" colspan=2 align="center" height=50px;>添加管理员</td></tr>
   <tr style="line-height:50px;">
      <td align="center"><font color=red>*</font>用户名：</td>
      <td align="center"><input style="width: 300px; height:30px;" type="text" name="txt_username" /></td>
   </tr>
   <tr style="line-height:50px;">
      <td align="center"><font color=red>*</font>密码：</td>
      <td align="center"><input style="width: 300px; height:30px;" type="password" name="txt_password" /></td>
   </tr>
   <tr style="line-height:50px;">
      <td align="center">邮箱：</td>
      <td align="center"><input style="width: 300px; height:30px;" type="text" name="txt_email" /></td>
   </tr>
   <tr><td colspan=2 align="center"><input style="width: 100px; height:30px; margin-top:20px;"  type="submit" name="Submit" value="添加" /></td></tr>
 </table>
</FORM>
</BODY>
</HTML>