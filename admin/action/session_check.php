
<HTML>
<BODY>
<?php 
  if ($_SESSION{'user'}=="") {
  	echo "<script>alert('��¼��ʱ�������µ�¼��');window.location.href='login.php';</script>;";
  } 
?>
</BODY>
</HTML>