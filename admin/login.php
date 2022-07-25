<?php 
session_start();
if(isset($_POST['dangnhap'])){
    $name = $_POST['Name'];
    $pass  = $_POST['Password'];

    if($name =='admin@gmail.com' && $pass =='123456'){
        $_SESSION['email'] = $name = $_POST['Name'];
        header('location:dashboard.php');
    }
    else{
        echo '<script>alert("Tài khoản mật khẩu sai")</script>';
    }
}
if(isset($_POST['home'])){
	header('location:http://localhost/Quizz/index.php');
}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Quizz - Đăng nhập</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="/admin/css/login/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- //css files -->
<!-- online-fonts -->

</head>
<body>
<!-- main -->
<div class="center-container">
	<!--header-->
	<div class="header-w3l">
		<h1>Quizz-Đăng Nhập</h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
				<h2>Đăng nhập</h2>
			</div>
			<form action="#" method="post">
				<div class="form-outline mb-4">
					<input placeholder="E-mail" name="Name" class="form-control" type="email" required="">
                    <label class="form-label" for="form2Example1">Email address</label>
				</div>
                <br>
				<div class="form">
					<input  placeholder="Password" name="Password" class="form-control" type="password" required="">
					<label class="form-label" for="form2Example2">Password</label>
				</div>
				<div class="sub-w3l">
					<h3><a href="#">Quên mật khẩu?</a></h3>
					<div class="right-w3l">
						<button type="submit" name="dangnhap">Đăng nhập</button>
						<button type="submit" name="home">Trang chủ</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!--//main-->
</div>
</body>
</html>