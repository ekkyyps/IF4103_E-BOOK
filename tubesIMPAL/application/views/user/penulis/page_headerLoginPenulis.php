<!DOCTYPE html>
<html lang="en">
<head>
  <title>e-BOOK</title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo.png') ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


  

  <style type="text/css">
  	.navbar-white {
    	background-color: white;
      height: 100px;
      color: #fff;
      padding-bottom: -15px;
		}
	  .navbar-white .navbar-brand {
    	color: #fff;
	  }

    .navbar-white .navbar-nav {
      padding-top: 20px;
    }

	  .navbar-white .navbar-nav > li > a {
    	color: grey;
      font-family: 'Roboto', sans-serif;
      font-style: bold;
      padding-top: 20px;
	  }
    .navbar-white .navbar-nav > li > a:hover,
    .navbar-white .navbar-nav > li > a:focus {
      color: red;
      background-color: white;
    }
	  .box {
		  margin-top: 80px;
      margin-bottom: 20px;
		  padding: 10px;
		  background-color: #fff	;
		  border-radius: 5px;
	  }
	  body {
		  background-color: #D8D8D8;
	  }
    .col-lg-4{
      color: black;
      font-family: Courier New;
      float: left;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-white ">
  <div class="container">
    <div class="col-lg-5">
      <div class="navbar-header">
      	<a href="<?php echo base_url('index.php/Home/setelahloginpenulis') ?>">
  			<img src="<?php echo base_url('assets/img/logo.png') ?>"  style="width: 40%">
  		</a>
      </div>
    </div>
    <div class="col-lg-4">
       <h2>WELCOME TO e-BOOK!</h2>
    </div>
    <ul class="nav navbar-nav navbar-right text-center">
      <li class="dropdown pull-right">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span><?php echo $this->session->userdata("nama"); ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url('index.php/Home/logout'); ?>">Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
