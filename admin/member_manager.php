
<HTML>
<HEAD>
<link href="../SpryAssets/admin_member_info.css" rel="stylesheet" type="text/css"/>
</HEAD>
<BODY>

<SPAN style="line-height: 50px;" class="table1_tr1">会员信息管理<br/></SPAN>
<table border=1 width=80% bordercolor="#FFFFFF" cellspacing="0" style="color:white;">
  <tr>
     <td>编号</td><td>会员名称</td><td>手机号</td><td>邮箱</td><td>消费总额</td><td>余额</td><td>注册日期</td><td>状态</td>
     <td colspan=4>操作</td>
  </tr>
  <?php 
   $conn=mysql_connect("127.0.0.1","root","123456");
   $select=mysql_select_db("onetube",$conn);
   $str="select * from Member_info order by M_CreateTime desc";
   $arr=mysql_query($str);
   while ($result=mysql_fetch_array($arr)){
  ?>
  <tr>
    <td><?php echo $result{"M_ID"};?></td>
    <td><?php echo $result{"M_Name"};?></td>
    <td><?php echo $result{"M_Card"};?></td>
    <td><?php echo $result{"M_Address"};?></td>
    <td><?php echo $result{"M_Money"};?></td>
    <td><?php echo $result{"M_Blance"};?></td>
    <td><?php echo $result{"M_CreateTime"};?></td>
    <td><?php echo $result{"M_Status"}=='1'?'<font color=blue>启用</font>':'<font color=red>禁用</font>';?></td>
    <td><a href="action/member_action_do.php?Type=1&M_ID=<?php echo $result{"M_ID"};?>">启用</a></td>
    <td><a href="action/member_action_do.php?Type=2&M_ID=<?php echo $result{"M_ID"};?>">禁用</a></td>
    <td><a href="action/member_action_do.php?Type=3&M_ID=<?php echo $result{"M_ID"};?>">删除</a></td>
    <td><a href="member_info.php?M_ID=<?php echo $result{"M_ID"};?>">详细信息</a></td>
  </tr>
   <?php }?>
  
</table>
</BODY>
</HTML>