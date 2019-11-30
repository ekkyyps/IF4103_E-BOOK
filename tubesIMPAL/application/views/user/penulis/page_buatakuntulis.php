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