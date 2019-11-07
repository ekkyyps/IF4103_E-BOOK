<!DOCTYPE html>
<html>
<head>
	<title>PERPUS</title>
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">
		.container {
			background: url(perpus.jpg);
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

</head>
<body>
	<div class="navbar">
		<a href="<?php echo base_url('index.php/Home') ?>">
			<img src="<?php echo base_url('assets/img/logo.png') ?>"  style="width: 20%">
		</a>
		<div class="search" style="float: right; padding-top: 3vw;">
            <input type="text" placeholder="Search Keywords" name="keyword" style="border-style: solid; border-radius: 30px; color: #303030; "> 
            <button type="submit" style="background-color: white; height: 25px; width: 30px; border-radius: 10px;">
            	<i class="fa fa-search" style="color: #e60000; height: 100%; margin-right:6px;"> </i>
            </button>
        </div>
	</div>


</body>
</html>