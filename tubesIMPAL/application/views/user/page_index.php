<style type="text/css">
		.container .bagian1 {
			float: left;
			margin-top: 5vw;
			font-family: Courier New;
		}

		.container .bagian2 {
			float: right;
		}
		.bagian1 .b1{
			margin-left: 5vw;
			background-color: #3EBFB7;
			border-radius: 5px;
			width: 30px	;
			height: 40px;
			color: white;
		}
		.bagian1 .b1:hover{
			background-color: #14868c;
		}
		.bagian1 .form1 .b1  {
			float: left;
			width: 200px;
		}
		.bagian1 .form2 .b1  {
			/*float: right;*/
			width: 200px;
		}
		.bagian2{
			padding-top: 10px;
			padding-bottom: 5px; 
		}
		.bagian2 .ketik {
			width: 60%;
			height: 50px;
			margin: 10px;
			border-radius: 12px;
		}
		.bagian2 .btng{
			margin-left: 10px;
			background-color:#d1274b;
			border-radius: 5px;
			width: 30%;
			height: 40px;
			color: white;
			border-color: none;
		}
		.bagian2 .btng:hover{
			background-color: #9d0b0b;
		}
		.form-login{
			width: 90%;
			padding-left: 50px;
		}
		.bagian2 .form-login .btn{
			background-color: #3EBFB7;
			color: black;
			width: 150px;
			font-weight: bold;
		}
		.bagian2 .form-login .btn:hover{
			background-color: #14868c;
		}
	
		
</style>

<div class="container">
		<div class="bagian1" style="width: 70%">
			<h1>WELCOME TO e-BOOK!</h1>
			<h3>most-completed books platform in the world</h3>
			<form class="form1" action="<?php echo base_url('index.php/Home/regbaca')?>">
				<button class="b1">mulai membaca </button>
			</form>
			<form class="form2" action="<?php echo base_url('index.php/Home/regtulis')?>">
				<button class="b1">mulai menulis</button>
			</form>
		</div>
		<div class="bagian2" style="width: 30%">
			<h2 style="font-weight: bold;">LOGIN WITH</h2>
			<!-- <form action="">  
				<button class="btnL">Google</button>
			</form>  -->
			<button type="button" class="btng">
  				<i class="fab fa-google-plus-g pr-1"></i>
  				<span>Google+</span>
			</button>

			<h3 style="float: center;"> OR </h3>
			<div class="form-login">
				<form action="<?php echo base_url('index.php/Home/login')?>" action="GET"  method="post" >
					<div class="form-group" style="padding-top: 5px;">
						<input type="text" class="form-control" name="username"  placeholder="username" class="ketik"><br>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="password" class="ketik"><br>
					</div>
					<input type="submit" class="btn" value="LOG IN">
				</form>
			</div>
		</div>
	</div>