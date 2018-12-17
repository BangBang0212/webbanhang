<head>
	<title>Online shop</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">
					<span class="glyphicon glyphicon-home"></span>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="">Sản phẩm</a></li>
				</ul>
				<form class="navbar-form navbar-left">
				    <p><input type="text" name="masp" placeholder="" id="timkiem" required="required" />
                        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm kiếm" />
                    </p>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="?quanly=dathang">Giỏ hàng</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Tài khoản</b> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Thông tin cá nhân</a></li>
							<li><a href="#">Đổi mật khẩu</a></li>
                            <li><a href="?quanly=dangnhap">Đăng nhập</a></li>
                            <li><a href="?quanly=dangkymoi">Đăng ký</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="index.php">Thoát</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>