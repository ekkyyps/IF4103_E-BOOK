<<<<<<< HEAD
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
=======
<div class="container" style="font-family: Courier New">
<?php $no=1; foreach ($data as $d ) {?>
  	<h3>ISBN : <?php echo $d->ISBN ?></h3>
  	<h3><?php echo $d->judul ?>  yang ditulis oleh <?php echo $d->penulis?></h3>
  	<p> Buku yang kita miliki dapat digunakan oleh siapapun dimanapun dan kapanpun
  		dengan dan tanpa biaya dan juga tanpa batasan seperti kompetitor sebelah.
  		Boleh saja menggandakannya atau mengutip tetapi jangan lupakan
  		catatan penulis.
	</p>
	<p>Website E-Book 2019</p>
	<h3>Judul 	: <?php echo $d->judul ?></h3>
	<h3>Penulis : <?php echo $d->penulis ?></h3>
	<br><br>
	<h3 style="text-align: center;">**SELAMAT MEMBACA**</h3>
	<img src="<?php echo base_url($d->url)?>" style="width: 50%;display: block; margin: auto;">
  	<h4><?php echo $d->isi ?></h4>
>>>>>>> c4d00349722d536df0e9a3f27384965337146f4d
<?php }?>
</div>

