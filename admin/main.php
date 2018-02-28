<?php session_start();?>  
<HTML>
<HEAD>
<TITLE>网站管理平台</TITLE>
<link href="../SpryAssets/main.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../css/index_style.css"/>
</HEAD>
<BODY>
<?php 
  if ($_SESSION{'user'}=="") {
  	echo "<script>alert('登录超时，请重新登录！');window.location.href='login.php';</script>;";
  } 
?>

<!--这是header-->
<div id="header">
    <div class="top_logo">
        <a href="#"><img alt="logo" src="../img/logo_124_28.png"/></a>
    </div>
    <div class="top_nav">
        <li><a href="#footer">&nbsp;&nbsp;帮助&nbsp;&nbsp;</a></li>
        <li><a href="login.php">&nbsp;&nbsp;后台管理&nbsp;&nbsp;</a>|</li>
        <li><a href="../member_login.php">&nbsp;&nbsp;登录/注册&nbsp;&nbsp;</a>|</li>
        <li><a href="#">&nbsp;&nbsp;联系我们&nbsp;&nbsp;</a>|</li>
        <li><a href="#">&nbsp;&nbsp;收藏网址&nbsp;&nbsp;</a>|</li>
        <li><a href="#">&nbsp;&nbsp;导航&nbsp;&nbsp;</a>|</li>
        <li><a href="../index.html">&nbsp;&nbsp;首页&nbsp;&nbsp;</a>|</li>
    </div>
</div>
<TABLE width=100% align="center">
  <tr class="table1_tr1"><td colspan="2">后台管理中心</td></tr>
  <tr class="table1_tr2">
    <td colspan="2">
      <?php //判断是否登录
        if ($_SESSION{'member'}=="") {
        	echo "<script>alert('登录超时，请重新登录！');window.location.href='login.php';</script>;";
        }
        else {
        	$membername=$_SESSION{'user'};
        	echo "您好".$membername."，欢迎来到onetube后台管理中心！";
        }
      ?>
    </td>
  </tr>
 <tr class="table1_tr3">
   <td width=200px valign="center" align="center">
      <UL>
         <li><a href="member_manager.php" target="mainframe">会员信息管理</a></li><br/>
         <li><a href="admin_add.php" target="mainframe">添加管理员</a></li><br/>
         <li><a href="admin_manager.php" target="mainframe">管理员管理</a></li><br/>
         <li><a href="../index.html" target="mainframe">网站前台网页</a></li><br/>
         <li><a href="../action/member_loginout_do.php">退出管理平台</a></li><br/>
      </UL>
   </td>
   <td class="table1_tr4">
     <IFRAME name="mainframe" width=100% height=500px;></IFRAME>
   </td>
 </tr>
</TABLE>
<!--这是底部footer-->
<div id="footer">
			<dl class="copyRight">
				<dt><span>网站声明：</span></dt>
				<br />
				<dd><a href="#">版权声明</a></dd>
				<dd><a href="#">服务使用</a></dd>
				<dd><a href="#">信息发布规则</a></dd>
				<dd><a href="#">投诉规则</a></dd>
				<dd><a href="#">隐私权声明</a></dd>
			</dl>
			<dl class="introduce">
				<dt><span>关于网站：</span></dt>
				<br />
				<dd><a href="#">About us</a></dd>
				<dd><a href="#">关于我们</a></dd>
				<dd><a href="#">About website</a></dd>
				<dd><a href="#">关于网站</a></dd>
				<dd><a href="#">网站地图</a></dd>
			</dl>
			<dl class="links">
				<dt><span>友情链接：</span></dt>
				<br />
				<dd><a title="前往TinkCMF" target="_blank" href="http://www.thinkcmf.com/"><img src="../img/icons/thinkCMF.ico" />&nbsp;&nbsp;TinkCMF</a></dd>
				<dd><a title="前往站酷" target="_blank" href="#"><img src="../img/icons/站酷.ico" />&nbsp;&nbsp;站酷</a></dd>
				<dd><a title="前往HBuilder" target="_blank" href="http://dcloud.io/"><img src="../img/icons/HBuilder.ico"/>&nbsp;&nbsp;HBuilder</a></dd>
				<dd><a title="前往九秒课堂" target="_blank" href="http://edu.9miao.com/course/1"><img src="../img/icons/九秒课堂.ico"/>&nbsp;&nbsp;九秒课堂</a></dd>
				<dd><a title="前往W3cschool" target="_blank" href="http://www.w3school.com.cn/"><img src="../img/icons/w3school.ico" />&nbsp;&nbsp;W3cschool</a></dd>
	
			</dl>
			<dl class="links2">
				<br />
				<br />
				<dd><a title="前往凤凰网" target="_blank" href="http://www.ifeng.com/"><img src="../img/icons/凤凰网.ico" />&nbsp;&nbsp;凤凰网</a></dd>
				<dd><a title="前往南都网" target="_blank" href="http://epaper.oeeee.com/epaper/A/html/2015-12/24/node_9573.htm"><img src="../img/icons/南都网.ico" />&nbsp;&nbsp;南都网</a></dd>
				<dd><a title="前往人民网" target="_blank" href="http://www.people.com.cn/"><img src="../img/icons/人民网.ico"/>&nbsp;&nbsp;人民网</a></dd>
				<dd><a title="前往亚太日报" target="_blank" href="http://edu.9miao.com/course/1"><img src="../img/icons/亚太日报.ico"/>&nbsp;&nbsp;亚太日报</a></dd>
				<dd><a title="前往观察者网" target="_blank" href="http://www.guancha.cn/"><img src="../img/icons/观察者.ico" />&nbsp;&nbsp;观察者网</a></dd>
	
			</dl>
			<dl class="contact">
				<dt><span>联系我们：</span></dt>
				<br />
				<dd><a title="使用qq" href="#"><img src="../img/icons/qq.ico"/>&nbsp;&nbsp;qq：924321336</a></dd>
				<dd><a title="联系我们" href="#"><img src="../img/icons/weChat.ico"/>&nbsp;&nbsp;微信:oneTube</a></dd>
				<dd><a title="联系我们" href="#"><img src="../img/icons/fax.ico"/>&nbsp;&nbsp;传真：123454</a></dd>
				<dd><a title="联系我们" href="#"><img src="../img/icons/tel.ico"/>&nbsp;&nbsp;固话：88788878</a></dd>
				<dd><a title="发邮件" href="mailto:seandimond@hotmail.com"><img src="../img/icons/mail.ico"/>&nbsp;&nbsp;Email：seandimond@hotmail.com</a></dd>
			</dl>
			<span class="bottom_copyright">Copyright ? 2015 Designed by Vincent Lee. All rights reserved.</span>
		</div>
</BODY>
</HTML>