<?php session_start();?>
<HTML>
<HEAD>
<link href="../SpryAssets/admin_member_info.css" rel="stylesheet" type="text/css"/>
</HEAD>
<BODY>
<?php 
  if ($_SESSION{'user'}=="") {
  	echo "<script>alert('登录超时，请重新登录！');window.location.href='login.php';</script>;";
  } 
?>
<SPAN class="table1_tr1">管理员名单</SPAN><br/><br/>
<form action="" method="post">
  <TABLE border=1 align="center" bordercolor="#FFFFFF" cellspacing="0" style="color:white; width:100%">
     <tr>
       <td>编号</td><td>用户名</td><td>密码</td><td>邮箱</td><td>编辑</td><td>删除</td>
     </tr>
     <?php 
     $conn=mysql_connect("127.0.0.1","root","123456");
     $select=mysql_select_db("onetube",$conn);
     $str="select * from admin_info order by A_ID";
     $arr=mysql_query($str);
     while ($result=mysql_fetch_array($arr)){
     ?>
     <tr>
       <td><?php echo $result{"A_ID"};?></td>
       <td><?php echo $result{"A_UserName"};?></td>
       <td><?php echo $result{"A_Password"};?></td>
       <td><?php echo $result{"A_Email"};?></td>
       <td><a href="admin_update.php?A_ID=<? echo $result{"A_ID"};?>编辑</a></td>
       <td><a href="action/admin_delete_do.php?A_ID=<?php echo $result{"A_ID"};?>">删除</a></td>
     </tr>
     <?php }?>
     
  </TABLE>
</form>
</BODY>
</HTML>