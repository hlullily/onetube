<?php session_start();?>
<HTML>
<HEAD>
<TITLE>�޸�����</TITLE>
<link href="SpryAssets/member_info.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/index_style.css"/>
</HEAD>
<BODY>
<!--����header-->
<div id="header">
    <div class="top_logo">
        <a href="#"><img alt="logo" src="img/logo_124_28.png"/></a>
    </div>
    <div class="top_nav">
        <li><a href="#footer">&nbsp;&nbsp;����&nbsp;&nbsp;</a></li>
        <li><a href="admin/login.php">&nbsp;&nbsp;��̨����&nbsp;&nbsp;</a>|</li>
        <li><a href="member_login.php">&nbsp;&nbsp;��¼/ע��&nbsp;&nbsp;</a>|</li>
        <li><a href="#">&nbsp;&nbsp;��ϵ����&nbsp;&nbsp;</a>|</li>
        <li><a href="#">&nbsp;&nbsp;�ղ���ַ&nbsp;&nbsp;</a>|</li>
        <li><a href="#">&nbsp;&nbsp;����&nbsp;&nbsp;</a>|</li>
        <li><a href="index.html">&nbsp;&nbsp;��ҳ&nbsp;&nbsp;</a>|</li>
    </div>
</div>

<TABLE align="center" class="table1" >
  <tr class="table1_tr1"><td colspan="2">��Ա����</td></tr>
  <tr class="table1_tr2">
    <td colspan="2">
      <?php //�ж��Ƿ��¼
        if ($_SESSION{'member'}=="") {
        	echo "<script>alert('��¼��ʱ�������µ�¼��');window.location.href='member_login.php';</script>;";
        }
        else {
        	$membername=$_SESSION{'member'};
        	echo "��ӭ����onetube��".$membername;
        }
      ?>
    </td>
  </tr>
  <tr class="table1_tr3">
    <td width=150px; align="center">      
        <a href="member_info.php">�鿴��Ա��Ϣ</a><br/><br/>
        <a href="member_update.php">�޸Ļ�Ա��Ϣ</a><br/><br/>
        <a href="member_pwd_update.php">�޸�����</a><br/><br/>
        <a href="action/member_loginout_do.php">��ȫ�˳�</a><br/>
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
       <tr class="table2_tr1"><td colspan="2" align="center">�޸�����</td></tr>
         <tr>
            <td>&nbsp&nbsp&nbsp&nbsp&nbsp�û�����</td>
            <td><?php echo $result{"M_Name"};?></td>
         </tr>
         <tr>
            <td><font color=red>*</font>����ԭ���룺</td>
            <td><input type="password" name="txt_password" /></td>
         </tr>
         <tr>
            <td><font color=red>*</font>���������룺</td>
            <td><input type="password" name="txt_password1" /></td>
         </tr>
         <tr>
            <td><font color=red>*</font>ȷ�������룺</td>
            <td><input type="password" name="txt_password2" /></td>
         </tr>
         <tr>
            <td colspan="2" align="center">
              <input type="hidden" name="txt_id" value="<?php echo $result{"M_ID"};?>"/>
              <input class="btn_submit1" type="submit" value="����" />
            </td>
         </tr>
       </TABLE> 
      </FORM>
    </td>
  </tr>
</TABLE>
<!--���ǵײ�footer-->
<div id="footer">
			<dl class="copyRight">
				<dt><span>��վ������</span></dt>
				<br />
				<dd><a href="#">��Ȩ����</a></dd>
				<dd><a href="#">����ʹ��</a></dd>
				<dd><a href="#">��Ϣ��������</a></dd>
				<dd><a href="#">Ͷ�߹���</a></dd>
				<dd><a href="#">��˽Ȩ����</a></dd>
			</dl>
			<dl class="introduce">
				<dt><span>������վ��</span></dt>
				<br />
				<dd><a href="#">About us</a></dd>
				<dd><a href="#">��������</a></dd>
				<dd><a href="#">About website</a></dd>
				<dd><a href="#">������վ</a></dd>
				<dd><a href="#">��վ��ͼ</a></dd>
			</dl>
			<dl class="links">
				<dt><span>�������ӣ�</span></dt>
				<br />
				<dd><a title="ǰ��TinkCMF" target="_blank" href="http://www.thinkcmf.com/"><img src="img/icons/thinkCMF.ico" />&nbsp;&nbsp;TinkCMF</a></dd>
				<dd><a title="ǰ��վ��" target="_blank" href="#"><img src="img/icons/վ��.ico" />&nbsp;&nbsp;վ��</a></dd>
				<dd><a title="ǰ��HBuilder" target="_blank" href="http://dcloud.io/"><img src="img/icons/HBuilder.ico"/>&nbsp;&nbsp;HBuilder</a></dd>
				<dd><a title="ǰ���������" target="_blank" href="http://edu.9miao.com/course/1"><img src="img/icons/�������.ico"/>&nbsp;&nbsp;�������</a></dd>
				<dd><a title="ǰ��W3cschool" target="_blank" href="http://www.w3school.com.cn/"><img src="img/icons/w3school.ico" />&nbsp;&nbsp;W3cschool</a></dd>
	
			</dl>
			<dl class="links2">
				<br />
				<br />
				<dd><a title="ǰ�������" target="_blank" href="http://www.ifeng.com/"><img src="img/icons/�����.ico" />&nbsp;&nbsp;�����</a></dd>
				<dd><a title="ǰ���϶���" target="_blank" href="http://epaper.oeeee.com/epaper/A/html/2015-12/24/node_9573.htm"><img src="img/icons/�϶���.ico" />&nbsp;&nbsp;�϶���</a></dd>
				<dd><a title="ǰ��������" target="_blank" href="http://www.people.com.cn/"><img src="img/icons/������.ico"/>&nbsp;&nbsp;������</a></dd>
				<dd><a title="ǰ����̫�ձ�" target="_blank" href="http://edu.9miao.com/course/1"><img src="img/icons/��̫�ձ�.ico"/>&nbsp;&nbsp;��̫�ձ�</a></dd>
				<dd><a title="ǰ���۲�����" target="_blank" href="http://www.guancha.cn/"><img src="img/icons/�۲���.ico" />&nbsp;&nbsp;�۲�����</a></dd>
	
			</dl>
			<dl class="contact">
				<dt><span>��ϵ���ǣ�</span></dt>
				<br />
				<dd><a title="ʹ��qq" href="#"><img src="img/icons/qq.ico"/>&nbsp;&nbsp;qq��924321336</a></dd>
				<dd><a title="��ϵ����" href="#"><img src="img/icons/weChat.ico"/>&nbsp;&nbsp;΢��:oneTube</a></dd>
				<dd><a title="��ϵ����" href="#"><img src="img/icons/fax.ico"/>&nbsp;&nbsp;���棺123454</a></dd>
				<dd><a title="��ϵ����" href="#"><img src="img/icons/tel.ico"/>&nbsp;&nbsp;�̻���88788878</a></dd>
				<dd><a title="���ʼ�" href="mailto:seandimond@hotmail.com"><img src="img/icons/mail.ico"/>&nbsp;&nbsp;Email��seandimond@hotmail.com</a></dd>
			</dl>
			<span class="bottom_copyright">Copyright ? 2015 Designed by Vincent Lee. All rights reserved.</span>
		</div>
</BODY>
</HTML>