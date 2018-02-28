<?php session_start();?>
<HTML>
<HEAD>
<TITLE>修改密码</TITLE>
<link href="SpryAssets/member_info.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/index_style.css"/>
</HEAD>
<BODY>
<!--这是header-->
<div id="header">
    <div class="top_logo">
        <a href="#"><img alt="logo" src="img/logo_124_28.png"/></a>
    </div>
    <div class="top_nav">
        <li><a href="#footer">&nbsp;&nbsp;帮助&nbsp;&nbsp;</a></li>
        <li><a href="admin/login.php">&nbsp;&nbsp;后台管理&nbsp;&nbsp;</a>|</li>
        <li><a href="member_login.php">&nbsp;&nbsp;登录/注册&nbsp;&nbsp;</a>|</li>
        <li><a href="#">&nbsp;&nbsp;联系我们&nbsp;&nbsp;</a>|</li>
        <li><a href="#">&nbsp;&nbsp;收藏网址&nbsp;&nbsp;</a>|</li>
        <li><a href="#">&nbsp;&nbsp;导航&nbsp;&nbsp;</a>|</li>
        <li><a href="index.html">&nbsp;&nbsp;首页&nbsp;&nbsp;</a>|</li>
    </div>
</div>

<TABLE align="center" class="table1" >
  <tr class="table1_tr1"><td colspan="2">会员中心</td></tr>
  <tr class="table1_tr2">
    <td colspan="2">
      <?php //判断是否登录
        if ($_SESSION{'member'}=="") {
        	echo "<script>alert('登录超时，请重新登录！');window.location.href='member_login.php';</script>;";
        }
        else {
        	$membername=$_SESSION{'member'};
        	echo "欢迎来到onetube！".$membername;
        }
      ?>
    </td>
  </tr>
  <tr class="table1_tr3">
    <td width=150px; align="center">      
        <a href="member_info.php">查看会员信息</a><br/><br/>
        <a href="member_update.php">修改会员信息</a><br/><br/>
        <a href="member_pwd_update.php">修改密码</a><br/><br/>
        <a href="action/member_loginout_do.php">安全退出</a><br/>
    </td>
    <td>
      <?php 
      $conn=mysql_connect("127.0.0.1","root","123456");
      $select=mysql_select_db("onetube",$conn);
      mysql_query("set names gbk");
      $str="select * from member_info where M_Name='".$membername."'";
      $arr=mysql_query($str);
      $result=mysql_fetch_array($arr);
      ?>
      <FORM action="action/member_pwd_update_do.php" name="form1" method="post">
       <TABLE  width=300px; align="center" class="table2">
       <tr class="table2_tr1"><td colspan="2" align="center">修改密码</td></tr>
         <tr>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp用户名：</td>
            <td><?php echo $result{"M_Name"};?></td>
         </tr>
         <tr>
            <td><font color=red>*</font>输入原密码：</td>
            <td><input type="password" name="txt_password" /></td>
         </tr>
         <tr>
            <td><font color=red>*</font>输入新密码：</td>
            <td><input type="password" name="txt_password1" /></td>
         </tr>
         <tr>
            <td><font color=red>*</font>确认新密码：</td>
            <td><input type="password" name="txt_password2" /></td>
         </tr>
         <tr>
            <td colspan="2" align="center">
              <input type="hidden" name="txt_id" value="<?php echo $result{"M_ID"};?>"/>
              <input class="btn_submit1" type="submit" value="保存" />
            </td>
         </tr>
       </TABLE> 
      </FORM>
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
				<dd><a title="前往TinkCMF" target="_blank" href="http://www.thinkcmf.com/"><img src="img/icons/thinkCMF.ico" />&nbsp;&nbsp;TinkCMF</a></dd>
				<dd><a title="前往站酷" target="_blank" href="#"><img src="img/icons/站酷.ico" />&nbsp;&nbsp;站酷</a></dd>
				<dd><a title="前往HBuilder" target="_blank" href="http://dcloud.io/"><img src="img/icons/HBuilder.ico"/>&nbsp;&nbsp;HBuilder</a></dd>
				<dd><a title="前往九秒课堂" target="_blank" href="http://edu.9miao.com/course/1"><img src="img/icons/九秒课堂.ico"/>&nbsp;&nbsp;九秒课堂</a></dd>
				<dd><a title="前往W3cschool" target="_blank" href="http://www.w3school.com.cn/"><img src="img/icons/w3school.ico" />&nbsp;&nbsp;W3cschool</a></dd>
	
			</dl>
			<dl class="links2">
				<br />
				<br />
				<dd><a title="前往凤凰网" target="_blank" href="http://www.ifeng.com/"><img src="img/icons/凤凰网.ico" />&nbsp;&nbsp;凤凰网</a></dd>
				<dd><a title="前往南都网" target="_blank" href="http://epaper.oeeee.com/epaper/A/html/2015-12/24/node_9573.htm"><img src="img/icons/南都网.ico" />&nbsp;&nbsp;南都网</a></dd>
				<dd><a title="前往人民网" target="_blank" href="http://www.people.com.cn/"><img src="img/icons/人民网.ico"/>&nbsp;&nbsp;人民网</a></dd>
				<dd><a title="前往亚太日报" target="_blank" href="http://edu.9miao.com/course/1"><img src="img/icons/亚太日报.ico"/>&nbsp;&nbsp;亚太日报</a></dd>
				<dd><a title="前往观察者网" target="_blank" href="http://www.guancha.cn/"><img src="img/icons/观察者.ico" />&nbsp;&nbsp;观察者网</a></dd>
	
			</dl>
			<dl class="contact">
				<dt><span>联系我们：</span></dt>
				<br />
				<dd><a title="使用qq" href="#"><img src="img/icons/qq.ico"/>&nbsp;&nbsp;qq：924321336</a></dd>
				<dd><a title="联系我们" href="#"><img src="img/icons/weChat.ico"/>&nbsp;&nbsp;微信:oneTube</a></dd>
				<dd><a title="联系我们" href="#"><img src="img/icons/fax.ico"/>&nbsp;&nbsp;传真：123454</a></dd>
				<dd><a title="联系我们" href="#"><img src="img/icons/tel.ico"/>&nbsp;&nbsp;固话：88788878</a></dd>
				<dd><a title="发邮件" href="mailto:seandimond@hotmail.com"><img src="img/icons/mail.ico"/>&nbsp;&nbsp;Email：seandimond@hotmail.com</a></dd>
			</dl>
			<span class="bottom_copyright">Copyright ? 2015 Designed by Vincent Lee. All rights reserved.</span>
		</div>
</BODY>
</HTML>