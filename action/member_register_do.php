<HTML>
<BODY>
<?php 
//��Աע�ᴦ�����
$conn=mysql_connect("127.0.0.1","root","123456");
$select=mysql_select_db("onetube",$conn);
mysql_query("set names gbk");
if ($_POST{'txt_username'}!=""&&$_POST{'txt_password'}!="") {
	$username=$_POST{'txt_username'};
	$password=$_POST{'txt_password'};
	$question=$_POST{'txt_question'};
	$answer=$_POST{'txt_answer'};
	$card=$_POST{'txt_card'};
	$address=$_POST{'txt_address'};
	$createtime=date('Y-m-d H:i:s');
	$mid=$_GET{"M_ID"};
	
	$str="insert into Member_info
			(M_Name,M_Password,M_Question,M_Answer,M_Card,M_Address,M_Money,M_Blance,M_CreateTime,M_Status) value ('$username','$password','$question','$answer','$card','$address',0,0,'$createtime',1)";
	$insert=mysql_query($str);
	if ($insert) {
		echo "<script>alert('��ϲ������Աע��ɹ���');window.location.href='../member_info.php';</script>;";
	}
	else {
		echo "<script>alert('�Բ��𣬻�Աע��ʧ�ܣ�');window.location.href='../member_register.php';</script>;";
	}
}
else {
	echo "<script>alert('�������û��������룡');window.location.href='../member_register.php';</script>;";
}
?>
</BODY>
</HTML>