<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>添加书架信息</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/BookManagement/Public/Admin/css/style.css" rel="stylesheet">
<script language='javascript' src='/BookManagement/Public/Admin/js/jquery.js'></script>
<script language='javascript'>
$(function () {
	$('#btn').on('click', function () {
		var bookcase = $.trim($('#bookcase').val());
		if (bookcase != '')
		{
			$.get('/index.php/Admin/Bookcase/ifexists', { bookcase : bookcase }, function (data) {
				if (data)
				{
					$('#msg').text(data);
				} 
				else 
				{
					$('#form').submit();
				}
			});
		} 
		else 
		{
			alert('书架名称不能为空！');
		}
	});
	$('#bookcase').focus(function () {
		$('#msg').text('');
	});
});
</script>
</head>
<body>
<table width="292" height="175" border="0" cellpadding="0" cellspacing="0" background="/BookManagement/Public/Admin/image/subBG.jpg">
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="3%" height="25">&nbsp;</td>
        <td width="94%">&nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><table width="100%" height="131"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="top"><form name="form1" id = 'form' method="post" action="">
                <table width="100%" height="114"  border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height=54 align="center">书架名称：
                      <input name="name" id='bookcase' type="text"></td>
                    </tr>
					<tr><td height=20 align='center'><div id='msg' style="color:red">&nbsp;</div></td></tr>
                  <tr>
                    <td align="center"><input name="submit1" type="button" id='btn' class="btn_grey" value="保存">
                      &nbsp;
                      <input name="submit2" type="button" class="btn_grey" value="关闭" onClick="window.close();"></td>
                    </tr>
                </table>
            </form></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>