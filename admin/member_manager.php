
<HTML>
<HEAD>
<link href="../SpryAssets/admin_member_info.css" rel="stylesheet" type="text/css"/>
</HEAD>
<BODY>

<SPAN style="line-height: 50px;" class="table1_tr1">��Ա��Ϣ����<br/></SPAN>
<table border=1 width=80% bordercolor="#FFFFFF" cellspacing="0" style="color:white;">
  <tr>
     <td>���</td><td>��Ա����</td><td>�ֻ���</td><td>����</td><td>�����ܶ�</td><td>���</td><td>ע������</td><td>״̬</td>
     <td colspan=4>����</td>
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
    <td><?php echo $result{"M_Status"}=='1'?'<font color=blue>����</font>':'<font color=red>����</font>';?></td>
    <td><a href="action/member_action_do.php?Type=1&M_ID=<?php echo $result{"M_ID"};?>">����</a></td>
    <td><a href="action/member_action_do.php?Type=2&M_ID=<?php echo $result{"M_ID"};?>">����</a></td>
    <td><a href="action/member_action_do.php?Type=3&M_ID=<?php echo $result{"M_ID"};?>">ɾ��</a></td>
    <td><a href="member_info.php?M_ID=<?php echo $result{"M_ID"};?>">��ϸ��Ϣ</a></td>
  </tr>
   <?php }?>
  
</table>
</BODY>
</HTML>