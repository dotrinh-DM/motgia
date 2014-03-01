<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Đăng nhập hệ thống quản trị</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>public/adminstyle/css/style.default.css" type="text/css" />

</head>

<body class="loginbody">

<div class="loginwrapper">
	<div class="loginwrap zindex100 animate2 bounceInDown">
	<h1 class="logintitle"><span class="iconfa-lock"></span> Sign In <span class="subtitle">Hello! Sign in to get you started!</span></h1>
        <div class="loginwrapperinner">
            <form id="loginform" action="" method="post">
                <p class="animate4 bounceIn"><input type="text" id="username" name="username" placeholder="Username" /></p>
                <p class="animate5 bounceIn"><input type="password" id="password" name="password" placeholder="Password" /></p>
                <p class="animate6 bounceIn"><input type="submit" class="btn btn-default btn-block" name="sub" value="Login"/></p>
                <p class="animate7 fadeIn"><a href=""><span class="icon-question-sign icon-white"></span> Forgot Password?</a></p>
            </form>
        </div><!--loginwrapperinner-->
    </div>
    <div class="loginshadow animate3 fadeInUp"></div>
</div><!--loginwrapper-->

</body>
</html>
