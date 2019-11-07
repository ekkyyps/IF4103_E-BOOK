<style type="text/css">
		.container .bagian1 {
			float: left;
			margin-top: 5vw;
		}

		.container .bagian2 {
			float: right;
		}
		.bagian1 .b1 {
			margin-left: 5vw;
			background-color: #008CBA;
			border-radius: 30px;
			width: 50%;
			height: 70px;
			color: black;
		}
		.bagian1 .form1 .b1  {
			float: left;
			width: 40%;
		}
		.bagian1 .form2 .b1  {
			float: right;
			width: 40%;
		}
		.bagian2 .ketik {
			width: 60%;
			height: 50px;
			margin: 10px;
			border-radius: 30px;
		}
		.bagian2 .b1 {
			margin-left: 5vw;
			background-color: #008CBA;
			border-radius: 30px;
			width: 30%;
			height: 40px;
		}
		.bagian2 .b2 {
			background-color: red;
			color: white;
			width: 65%;
			height: 4vw;
		}
</style>

<div class="container">
		<div class="bagian1" style="width: 70%">
			<h1>WELCOME TO e-BOOK!</h1>
			<h3>most-completed books platform in the world</h3>
			<form class="form1" action="<?php echo base_url('index.php/Home/regbaca')?>">
				<button class="b1">Mulai Membaca </button>
			</form>
			<form class="form2" action="<?php echo base_url('index.php/Home/regtulis')?>">
				<button class="b1">Mulai menulis</button>
			</form>
		</div>
		<div class="bagian2" style="width: 30%">
			<h2>LOGIN WITH</h2>
			<form action="">
				<button class="b2">Google</button>
			</form> <br>
			<h3>OR</h3>
			<div class="form-login">
				<form action="<?php echo base_url('index.php/Home/login')?>" action="GET"  method="post" >
					<div class="form-group">
						<input type="text" class="form-control" name="username"  placeholder="username" class="ketik"><br>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="password" class="ketik"><br>
					</div>
					<input type="submit" class="btn btn-block btn-custom-green" value="LOGIN"  style="background-color:green; color: white;">
				</form>
			</div>
		</div>
	</div>