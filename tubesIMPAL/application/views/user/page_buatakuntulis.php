<style type="text/css">
		.text{
			text-align: center;
			font-family: Courier New;
		}
		.container {
			text-align: center;
		}
		.container .ketik {
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
</style>

<div class="text">
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
			<button class="b1">Google </button>
			<input type="submit" class="btn btn-block btn-custom-green" value="Mulai Menulis"  style="background-color:green; color: white;">
			<br><br><br>
		</form>
	</div>
