<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../images/校徽.jpg" type="image/gif" >
		<title>登录</title>
		<link rel="stylesheet" href="../css/login.css">
		<script src="../js/jquery-3.3.1.min.js"></script>
		<script src="../js/index.js"></script>
	</head>
	<body>
		<div class="login">
			<div class="title">
				<h1 style="margin-left: 30px;">超级管理员</h1>
			</div>
			<form action="super_logincheck.php" method="post">
				<div class="username">
					<div class="left">
						<img src="../images/login.png">
					</div>
					<input type="text" name="username" placeholder="请输入用户名" id="username">
				</div>
				<div class="password">
					<div class="left">
						<img src="../images/login_password.png">
					</div>
					<input type="password" name="password" placeholder="请输入密码" id="password">
				</div>
				<div class="captcha">
					<input type="text" name="authcode" placeholder="请输入验证码">
					<div class="img">
						 <a href="javascript:void(0)" onclick="document.getElementById('captch_img').src='../PHP/captcha.php?r='+Math.random()">
						 	<img id="captch_img" src="../PHP/captcha.php?r=<?php echo rand(); ?>">
						 </a>
						 <p>
						 	<a href="javascript:void(0)" onclick="document.getElementById('captch_img').src='../PHP/captcha.php?r='+Math.random()">换一张</a>
						 </p>
					</div>
				</div>
				<div class="button">
					<input type="submit"  value ="立即登录" name="submit">
				</div>
				<div class="else">
					<ul>
						<li>
							<a href="#"><p>忘记密码</p></a>
						</li>
						<li>
							<a href="login.php"><p>普通管理员登录入口</p></a>
						</li>
						<li class="register">
							<a href="super_register.php"><p>立即注册</p></a>
						</li>
					</ul>
				</div>
			</form>
		</div>
		<div class="footer">
			<br><br><br>
			<p>Copyright © 2019 河南大学党委统战部 技术支持<span>河南大学 </span><span>107网站工作室</span><span> 管理后台</span></p>
			<p>地址：中国 河南 开封.明伦街/金明大道 邮编：475001/475004 电话：0371-265666428</p>
		</div>
	</body>
</html>