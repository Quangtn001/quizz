

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
    <style>

    </style>
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
		        	<li class="nav-item active">
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
    <br><br><br>
    <div class="container">
        <button class="btn btn-outline-success"> + Thêm câu hỏi</button>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Câu hỏi</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Tiến độ</th>
                <th scope="col">Chức năng</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Thông báo</th>
                <th scope="col">Tác giả</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <th scope="row">1</th>
                    <td>Câu hỏi 1 </td>
                    <td>Cho tam giác đều ABC...</td>
                    <td><p class="progress-bar" style="width:70%; background-color:green;border-radius:15px;">Tiến độ 70%</p></td>
                    <td>
                        <a href="#" class="btn btn-primary">Xem</a>
                        <a href="#" class="btn btn-success">Sửa</a>
                        <a href="#" class="btn btn-danger">Xóa</a>
                    </td>
                    <td>20/01/2022</td>
                    <td>01 thông báo</td>
                    <td>Nguyễn Văn A</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Câu hỏi 2 </td>
                    <td>Trường tĩnh điện là...</td>
                    <td><p class="progress-bar" style="width:30%; background-color:green;border-radius:15px;"> Tiến độ 30%</p></td>
                    <td>
                        <a href="#" class="btn btn-primary">Xem</a>
                        <a href="#" class="btn btn-success">Sửa</a>
                        <a href="#" class="btn btn-danger">Xóa</a>
                    </td>
                    <td>13/06/2021</td>
                    <td>0 thông báo</td>
                    <td>Nguyễn Văn B</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Câu hỏi 3 </td>
                    <td>Vi xử lý 8088 có...</td>
                    <td><p class="progress-bar" style="width:75%; background-color:green;border-radius:15px;" >Tiến độ 75%</p></td>
                    <td>
                        <a href="#" class="btn btn-primary">Xem</a>
                        <a href="#" class="btn btn-success">Sửa</a>
                        <a href="#" class="btn btn-danger">Xóa</a>
                    </td>
                    <td>01/02/2022</td>
                    <td>05 thông báo</td>
                    <td>Trần Văn C</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Câu hỏi 4 </td>
                    <td>Trong hệ hexa 23H + 23H =?</td>
                    <td><p class="progress-bar" style="width:0%; background-color:green;" >Tiến độ 0%</p></td>
                    <td>
                        <a href="#" class="btn btn-primary">Xem</a>
                        <a href="#" class="btn btn-success">Sửa</a>
                        <a href="#" class="btn btn-danger">Xóa</a>
                    </td>
                    <td>29/04/2022</td>
                    <td>02 thông báo</td>
                    <td>Vũ Văn D</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Câu hỏi 5 </td>
                    <td>Dung lượng tối đa của VXL...</td>
                    <td><p class="progress-bar" style="width:50%; background-color:green;border-radius:15px;" >Tiến độ 50%</p></td>
                    <td>
                        <a href="#" class="btn btn-primary">Xem</a>
                        <a href="#" class="btn btn-success">Sửa</a>
                        <a href="#" class="btn btn-danger">Xóa</a>
                    </td>
                    <td>10/06/2022</td>
                    <td>01 thông báo</td>
                    <td>Nguyễn Văn E</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Câu hỏi 6 </td>
                    <td>Tìm số đường địa chỉ của...</td>
                    <td><p class="progress-bar" style="width:100%; background-color:green;border-radius:15px;">Tiến độ 100%</p></td>
                    <td>
                        <a href="#" class="btn btn-primary">Xem</a>
                        <a href="#" class="btn btn-success">Sửa</a>
                        <a href="#" class="btn btn-danger">Xóa</a>
                    </td>
                    <td>20/01/2022</td>
                    <td>01 thông báo</td>
                    <td>Nguyễn Văn A</td>
                </tr>
            </tbody>
        </table>
    </div>
	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script> -->

	</body>
</html>

