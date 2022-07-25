<?php 
    session_start();
    if(!isset( $_SESSION['email'])){
        header('location:login.php');
    }
?>
<?php 
    if(isset($_POST['dangxuat'])){
        unset($_SESSION['email']);
        header('location:http://localhost/Quizz/index.php');
    }

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Quản lý</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light fixed-top" id="ftco-navbar">
		    <div class="container">
		    	<a href="dashboard.php"><img src="../images/Logo.png" alt="" class="navbar-brand"></a>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
		        	<li class="nav-item ">
						
						<a href="dashboard.php" class="nav-link"><i class="fa fa-1x fa-home"></i>Trang chủ</a>
					</li>
		        	<li class="nav-item">
						<a href="quanlycauhoi.php" class="nav-link"><i class="fa fa-1x fa-clock-o"></i> Câu hỏi</a>
					</li>
		        	<li class="nav-item active">
						<a href="lophoc.php" class="nav-link"><i class="fa fa-1x fa-users"></i> Các lớp học</a>
					</li>
		        	<li class="nav-item">
						<?php 
                            echo "<p style='padding-top:20px;color:black;'>" .  $_SESSION['email'] . "</p>";
                        ?>
                        <form action="" method="post">
                            <input type="submit" value="Đăng xuất" name="dangxuat">
                        </form>
                        
					</li>
		        </ul>
		      </div>
		    </div>
		  </nav>
    <!-- END nav -->
  		</div>
	</section>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <label for="">Các lớp học của tôi</label>
                <form class="form-inline md-form form-sm mt-0">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Tìm kiếm một lớp học" aria-label="Search">
                </form>
            </div>
            <div class="col">
                <div style="float: right;">
                    <label for="">Hoặc</label>
                    <br>
                    <button class="btn btn-dark">+ Thêm một lớp học</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
			<img src="../images/2.png" class="rounded mx-auto d-block" alt="Cinque Terre" width="200" height="200">
        </div>
        <h4 class="text-center">Bạn chưa tham gia lớp học nào.</h4>
        <p class="text-center">THEQ is more fun with friends.</p>
        <div class="row justify-content-center">
            <button type="submit" class="btn btn-primary">Join a Class</button>
        </div>
    </div>
	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script> -->

	</body>
</html>

