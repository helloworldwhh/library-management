<html>
<head>
	<title>图书管理系统登陆</title>
	<meta charset="UTF-8"  />
<script type="text/javascript">
</script>
<style type="text/css">
td
{ 
	height: 25px;
}
input
{ 
	height: 20px;
}
.wh
{ 
	width: 450px;
	height: 300px;
	margin: 100px 0px 0px 450px;
	text-align: center;
}
td.input
{ 
	width: 30px;
}
</style>
</head>
<body>
<?php
	$Err="";
	$a=0;
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{	
		include("config.php");

		$outcome= mysql_query("SELECT * FROM card",$online);

		while($sql = mysql_fetch_array($outcome))
		{ 
			if (strcmp($sql['cno'],$_POST['cno']))
				$a=$a+1;
			if (strcmp($sql['cno'],$_POST['cno']))
				$a=$a+1;
			if ($a==0)
				{
					mysql_close($online);

					session_start();
					$_SESSION['name'] = $sql['name'];
					$_SESSION['type'] = $sql['type'];
					$_SESSION['cno'] = $sql['cno'];
					echo '<script type="text/javascript"> alert("登陆成功"); window.location='.'\''.'index.php'.'\''.' </script>';
				};
			$a=0;
		}
		echo '<script type="text/javascript"> alert("用户名不存在或密码错误"); window.location='.'\''.'land.php'.'\''.' </script>';
	}
?>
<div class="wh">
	<img src="lib.png" width="238" height="113">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<fieldset>
	<legend><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;图书管理登陆&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3></legend>
	<table align="center">
	<tr>
		<td>账号：</td>
		<td><input type="text" name="cno"/></td>
	</tr>
	<tr>
		<td>密码：</td>
		<td><input type="password" name="cno"/></td>
	</tr>
	<tr>
		<td class="a"><input type="submit"  value="登陆"></td>
		<td><a href="register.php">账号注册</a></td>
	</tr>
	</table>
</fieldset>
</div>
</form>
</body>
</html>