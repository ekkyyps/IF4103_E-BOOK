<style type="text/css">
		.text{
			text-align: center;
			font-family: Courier New;
			font-weight: bold;
			float: right;
			padding-top: 65px;
		}
		.container {
			text-align: center;
		}
		/*.container .ketik {
			width: 40%;
			height: 50px;
			margin: 10px;
			border-radius: 30px;
		}
		.container .tgl {
			border-radius: 30px;
			width: 12.8%;
			height: 40px;
		}
		.b1 {
			background-color: #f44336;
			border-radius: 30px;
			width: 10%;
			height: 40px;
		}
		.b2 {
			background-color: #008CBA;
			border-radius: 30px;
			width: 10%;
			height: 40px;
		}
		.btng{
			margin-left: 10px;
			background-color:#d1274b;
			border-radius: 5px;
			width: 30%;
			height: 40px;
			color: white;
			border-color: none;
		}
		.btng:hover{
			background-color: #9d0b0b;
		}*/
		.col-md-4 {
			width: 30%;
			height: 60%;
			border-radius: 5px;
			background-color: #bae8e8; 
		}
	
		#btngo{
			margin-left: 10px;
			background-color:#9d0b0b;
			border-radius: 5px;
			width: 40%;
			height: 40px;
			color: white;
			border-color: none;
			transition: 0.3s;
		}
		#btngo:hover{
			opacity: 0.8;
		}
		.btn{
			background-color: #14868c;			
			border-radius: 5px;
			width: 50%;
			height: 40px;
			color: white;
			border-color: none;
			float: right;
			font-family: Courier New;
			font-weight: bold;
			transition: 0.3s;
		}
		.btn:hover{
        	background-color:#3EBFB7 ;
        	color: black;
    	}
</style>


<div class="container">
		<div class="row main">
			<div class="main-login main-center">
				<div class="col-md-6">
					<div class="text">
 						<h1>Let's Join e-Book!</h1>
						<h3 style="color: grey">start your journey now</h3>
 					</div>	
				</div>
				
				<div class="col-md-2"></div>
				
				<div class="col-md-4">
					<form action="<?php echo base_url('index.php/Home/register_tulis'); ?>" action="GET" method="post">

						<!-- username -->
						<p></p>
						<div class="form-group" style="width: 300px;">
  							<label for="name" class="cols-sm-2 control-label">Your Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
      							<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        						<input type="text" name="uname" placeholder="username" class="form-control">
        					</div>
        				</div>

        				<!-- email -->
        				<p></p>
        				<div class="form-group" style="width: 300px;">
  							<label for="name" class="cols-sm-2 control-label">Active Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
      							<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
        						<input type="text" name="email" placeholder="email" class="form-control">
        					</div>
        				</div>

        				<!-- password -->
        				<p></p>
        				<div class="form-group" style="width: 300px;">
  							<label for="name" class="cols-sm-2 control-label">Your Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
      							<span class="input-group-addon"><i class="fa fa-lock fa" aria-hidden="true"></i></span>
        						<input type="password" name="pass" placeholder="password" class="form-control">
        					</div>
        				</div>

        				<!-- birthdate -->
        				<p></p> 
        				<div class="form-group" style="width: 300px;">
  							<label for="name" class="cols-sm-2 control-label">Date of Your Birthday</label>
							<div class="cols-sm-10">
								<div class="input-group">
      								<span class="input-group-addon"><i class="far fa-calendar-alt" aria-hidden="true"></i></span>
									<input type="date" name="tanggal"  id="tanggal" style="border-radius: 3px; height: 32px; width: 263px; text-align: center;">
								</div>
        					</div>
        				</div>

        				<!-- button -->
        				<p></p>
        				<p></p>
        				<div class="form-group-inline">
        					<button type="button" class="btng" id="btngo">
  								<i class="fab fa-google-plus-g pr-1"></i>
  								<span>Google+</span>
							</button>
							<input type="submit" class="btn" value="mulai menulis">

        				</div>

					</form>
				</div>
			</div>
		</div>
</div>

<!-- <div class="text">
		<h1>Let's Join e-Book!</h1>
		<h3 style="color: grey">start your journey now</h3>
	</div>
	<div class="container form-create" style="background: url(<?=base_url('assets/img/perpus.jpg')?> )">
		<form action="<?php echo base_url('index.php/Home/register_tulis'); ?>" action="GET" method="post">
			<br><br>
			<div class="form-group">
                <input type="text" class="form-control" name="uname" placeholder="username">
            </div><br>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="email">
            </div><br>
            <div class="form-group">
                <input type="password" class="form-control" name="pass" placeholder="password">
            </div><br>
            <div class="form-group">
                <input type="text" class="form-control" name="tanggal" placeholder="tanggal lahir">
            </div>
			<br><br>
			<button type="button" class="btng">
  				<i class="fab fa-google-plus-g pr-1"></i>
  				<span>Google+</span>
			</button>
			<input type="submit" class="btn btn-block btn-custom-green" value="Mulai Menulis"  style="background-color:green; color: white;">
			<br><br><br>
		</form>
	</div>
 -->