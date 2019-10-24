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
			width: 30%;
			height: 70px;
			color: black;
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
			<button class="b1">Mulai Membaca </button>
			<form action="<?php echo base_url('Home/tulis')?>">
				<button class="b1">Mulai menulis</button>
			</form>
		</div>
		<div class="bagian2" style="width: 30%">
			<h2>LOGIN ADMIN</h2>
			<form action="<?php echo base_url('Home/login_admin')?>">
				<button class="b2">Admin</button>
			</form> <br>
			<h3 style="padding-left: 8vw;">OR</h3>
			<input type="text" placeholder="username" name="username" class="ketik"><br>
			<input type="text" placeholder="email" name="email" class="ketik"><br>
			<br><br>
			<button class="b1">Log In </button>
		</div>
	</div>