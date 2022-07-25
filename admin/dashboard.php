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
		        	<li class="nav-item active">
						
						<a href="dashboard.php" class="nav-link"><i class="fa fa-1x fa-home"></i>Trang chủ</a>
					</li>
		        	<li class="nav-item">
						<a href="quanlycauhoi.php" class="nav-link"><i class="fa fa-1x fa-clock-o"></i> Câu hỏi</a>
					</li>
		        	<li class="nav-item">
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
    <br>
    <br>
    <br>
    <div class="container">
        <div class="input-group">
            <div class="form-outline">
                <table class="table table-bordered">
                    <tr>
                        <td>
                            <input type="text" id="form1" class="form-control" placeholder="Nhập mã tham gia..." style="width:500px; padding:30px;"/>
                        </td>
                        <td>
                            <button class="btn btn-warning" style="padding: 20px;">Tham Gia</button>
                        </td>
                    </tr>
                </table>
                
            </div>
        </div>
    </div>
    <section id="home">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<h2>Tham gia vào các lớp học. Cùng nhau nỗ lực vươn xa!</h2>
					<p class="item">Khi một bài học nhỏ nhất cũng mang lại cảm giác chiến thắng, bạn sẽ có thêm động lực tiếp bước.</p>
				</div>
				<div class="col-sm-7">
					<img src="../images/1.png" class="rounded" alt="Cinque Terre" width="600" height="400">
				</div>
			</div>
		</div>
	</section>

	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script> -->

	</body>
</html>

