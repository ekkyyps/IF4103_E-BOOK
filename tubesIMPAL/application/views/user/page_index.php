
<style type="text/css">
		.col-lg-7 .bagian1 {
			float: left;
			margin-top: 5vw;
			font-family: Courier New;
		}
		.col-lg-7 .b1{
			width: 30%;
			border-radius: 5px;
			background-color: #3EBFB7;
			font-family: Courier new;
			color: black;
		}
		.col-lg-7 .b1:hover{
			background-color: #14868c;
			color: white;
		}
		.bagian1 .form1 .b1  {
			float: left;
		}
		.bagian1 .form2 .b1  {
			float: right;
		}
		.col-lg-4 {
			width: 30%;
			height: 60%;
			border-radius: 5px;
			background-color: #bae8e8;
			margin-top: 23px; 
		}
		.col-lg-4 .btng {
  			background: #dd4b39;
  			color: white;
  			
		}
		.col-lg-4 .btng {
			background-color:#9d0b0b;
			border-radius: 5px;
			width: 40%;
			height: 40px;
			color: white;
			border-color: none;
			transition: 0.3s;	
		}
		.col-lg-4 .btng:hover{
			opacity: 0.8;
		}
		.col-lg-4 .btn{
			margin-top: 13px;
			background-color: #3EBFB7;
			font-family: Courier New;
			color: black;
			width: 40%;
			font-weight: bold;
			transition: 0.3s;
		}
		.col-lg-4 .btn:hover{
			background-color: #14868c;
			color: white;
		}
		
</style>

<div class="container">
		<div class="row main">
			<div class="main-login main-center">
				<div class="col-lg-7" style="font-weight: bold;">	
 					<div class="bagian1">
						<h1>WELCOME TO e-BOOK!</h1>
						<h3>most-completed books platform in the world</h3>
					<br> </br>
					<form class="form1" action="<?php echo base_url('index.php/Home/regbaca')?>">
						<button class="b1">mulai membaca </button>
					</form>
					<form class="form2" action="<?php echo base_url('index.php/Home/regtulis')?>">
						<button class="b1">mulai menulis</button>
					</form>
					</div>
				</div>
				
				<div class="col-lg-1"></div>
				
				<div class="col-lg-4">
					<form action="<?php echo base_url('index.php/Home/login'); ?>" action="GET" method="post">
						
						<!-- title -->
						<div class="form-group" style="padding-right: 264px; font-family: Arial; font-size: 18px;">
							<h2> LOGIN </h2>
						</div>

						<!-- username -->
						<p style="line-height: 35px;"></p>
						<div class="form-group" style="width: 300px;">
  							<!-- <label for="name" class="cols-sm-2 control-label">Your Username</label> -->
							<div class="cols-sm-10">
								<div class="input-group">
      							<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        						<input type="text" name="username" placeholder="username" class="form-control">
        					</div>
        				</div>

        				<!-- password -->
        				<p></p>
        				<div class="form-group" style="width: 300px;">
  							<!-- <label for="name" class="cols-sm-2 control-label">Active Email</label> -->
							<div class="cols-sm-10">
								<div class="input-group">
      							<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
        						<input type="password" name="password" placeholder="password" class="form-control">
        					</div>
        				</div>

        				<!-- submit -->
        				<p></p>
        				<div class="form-group">
        					<input type="submit" class="btn" value="Login">
        				</div>

        				<!-- login with -->
						<div class="form-group">
							<h6 style="font-family: Verdana; font-weight: bold;">OR</h5>
								<button type="button" class="btng">
  								<i class="fab fa-google-plus-g pr-1"></i>
  								<span>Google+</span>
							</button>
						</div>

        			</form>
        		</div>
        	</div>
        </div>
</div>

