<HTML>
<BODY>
<?php 
//会员退出处理页
$_SESSION{'member'}="";
echo "<script>alert('您已安全退出系统！');window.location.href='../index.html';</script>;";
?>
</BODY>
</HTML>