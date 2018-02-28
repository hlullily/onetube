<?php session_start();?>
<HTML>
<HEAD>
<link href="../SpryAssets/admin_member_info.css" rel="stylesheet" type="text/css"/>
</HEAD>
<BODY >
<?php 
  if ($_SESSION{'user'}=="") {
  	echo "<script>alert('登录超时，请重新登录！');window.location.href='login.php';</script>;";
  } 
?>
<form action="action/admin_update_do.php" method="post">
 <?php 
   if ($_GET{"A_ID"}!="") {
   	$conn=mysql_connect("127.0.0.1","root","123456");
    $select=mysql_select_db("onetube",$conn);
    $aid=$_GET{"A_ID"};
    $str="select * from admin_info where A_ID='".$aid."'";
    $arr=mysql_query($str);
    $result=mysql_fetch_array($arr);
  ?>
  <TABLE border=1 align="center" cellpadding="0" style="margin-top: 80px; height:200px; width:300px; color:white;">
     <tr><td colspan=2 align="center">编辑管理员信息</td></tr>
     <tr>
       <td>用户名：</td>
       <td><?php echo  $result{'A_Userame'};?></td>
     </tr>
     <tr>
       <td>密码：</td>
       <td><input type="password" name="txt_password" value="<?php echo $result{'A_Password'};?>" /></td>
     </tr>
     <tr>
       <td>邮箱：</td>
       <td><input type="text" name="txt_email" value="<?php echo $result{'A_Email'};?>"</td>
     </tr>
     <tr><td colspan=2 align="center">
        <input type="hidden" name="txt_id" value="<?php echo $result{'A_ID'};?>" />
        <input style="width: 100px; height:20px;" type="submit" value="保存" />        
     </td></tr>
  </TABLE>
  <?php 
   }
   else {
   	echo "<script>alert('请选择要编辑的管理员信息！');window.location.href='admin_manager.php';</script>;";
   }
  ?>
   
</form>
</BODY>
</HTML>