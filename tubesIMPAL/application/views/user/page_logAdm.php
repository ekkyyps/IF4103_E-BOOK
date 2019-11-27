<style type="text/css">
    .bagian2 .btn{
        background-color: #3EBFB7;
        color: black;
        width: 150px; 
        border-radius: 5px; 
        font-weight: bold;
    }
    .bagian2 .btn:hover{
        background-color: #14868c;
    }

</style>


<div class="container">

		<div class="bagian1" style="width: 70%; font-family: Courier New; padding-top: 50px; float: left; text-align: left;">
            <h2>WELCOME TO e-BOOK!</h2>
            <h3>most-completed books platform in the world</h3>
		</div>
		<div class="bagian2 form-login" style="width: 25%; float: right; padding-bottom: 30vw">
			<form action="<?php echo base_url('index.php/Admin/login'); ?>" action="GET"  method="post" style="background-color:white;">       
                <h3 class="text-center title-login" style=" font-weight: bold; ">LOGIN ADMIN</h3>
                    <div class="form-group" style="border-radius: 40%; padding-top: 20px;">
                        <input type="text" class="form-control" name="no_pegawai" placeholder="no pegawai">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="passwordA" placeholder="password">
                    </div>
                    <input type="submit" class="btn" value="LOG IN">
            </form>
		</div>
	</div>