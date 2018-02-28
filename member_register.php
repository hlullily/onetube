<HTML>
<HEAD><TITLE>会员注册</TITLE>
<link href="SpryAssets/member_register.css" rel="stylesheet" type="text/css"/>
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
<section>
     <h3>oneTube用户注册</h3>
     <div class="login_div">
      
    <FORM action="action/member_register_do.php" name="form1" method="post">
    
    <TABLE>
      <tr><td colspan="2" align="center"></td></tr>
      <tr>
        <td>用户名：</td>
        <td><input type="text" name="txt_username" /></td>
      </tr>
      <tr>
        <td>密码：</td>
        <td><input type="password" name="txt_password" /></td>
      </tr>
      <tr>
        <td>密保：</td>
        <td><input type="text" name="txt_question" /></td>
      </tr>
      <tr>
        <td>密保答案：</td>
        <td><input type="text" name="txt_answer" /></td>
      </tr>
      <tr>
        <td>手机号：</td>
        <td><input type="text" name="txt_card" /></td>
      </tr>
      <tr>
        <td>邮箱：</td>
        <td><input type="text" name="txt_address" /></td>
      </tr>
      <tr><td colspan="2" align="center"><input class="btn_register" type="submit" value="注册" /></td></tr>
    </TABLE>
    </FORM>
      </div>
    </section>
</BODY>
</HTML>