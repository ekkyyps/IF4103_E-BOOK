<style type="text/css">
	.judul{
		text-align: center;
		font-family: "Verdana", sans-serif;
		font-weight: bold;
	}
	.isbn{
		text-align: center; 
	}
	.isi{
		text-align: center;
		padding-top: 3vw;
	}
	.btn{
    	background-color: #9d0b0b;
    	border-radius: 5px;
    	width: 100px; 
    	height: 35px;
    	color: white;
    	border-color: none;
    	font-family: Courier New;
    	font-weight: bold;
    	margin-left: 7vw;
    	transition: 0.3s;
  	}
  	.btn:hover{
    	opacity: 0.8;
    
  	}
</style>



<?php $no=1; foreach ($data as $d ) {?>
  <!-- <h4>ISBN</h4> <h4><?php echo $d->ISBN ?></h4> -->
  <!-- <h4>JUDUL BUKU</h4> -->
  <!-- <a href="<?= base_url(); ?>index.php/Home/pagejenis" class="btn">kembali</a> -->
  <h3 class="judul"><?php echo $d->judul ?></h3>
  <h6 class="isbn"><?php echo $d->ISBN ?></h6>
  <!-- <h3>ISI</h3> -->
  <h5 class="isi"><?php echo $d->isi ?></h5>
<?php }?>

