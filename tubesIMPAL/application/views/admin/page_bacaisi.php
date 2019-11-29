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
<?php }?>
</div>

