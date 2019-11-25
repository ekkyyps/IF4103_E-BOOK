<style type="text/css">
		.text{
			text-align: center;
			font-family: Courier New;
			font-weight: bold;
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
			/*border-radius: 30px;
			width: 12.8%;
			height: 40px;*/
		/*	[type="date"] {
  			background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}

/* custom styles */
body {
  padding: 4em;
  background: #e5e5e5;
  font: 13px/1.4 Geneva, 'Lucida Sans', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
}
label {
  display: block;
}
input {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
}*/
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
<div >	
	<div class="container form-create">
		<form action="<?php echo base_url('index.php/Home/register_baca'); ?>" action="GET" method="post">
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
            	<label for="dateofbirth">Tanggal Lahir</label>
				<input type="date" name="dateofbirth" id="dateofbirth">
			</div>	
<!--            <div class="form-group">
                <input type="text" class="form-control" name="tanggal" placeholder="tanggal lahir">
            </div> -->
			<br><br>
			<button class="b1">Google </button>
			<input type="submit" class="btn btn-block btn-custom-green" value="Mulai Membaca"  style="background-color:green; color: white;">
			<br><br><br>
		</form>
	</div>
