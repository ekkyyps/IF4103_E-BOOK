<?php $no=1; foreach ($data as $d ) {?>
  <h1>ISBN</h1>
  <h2><?php echo $d->ISBN ?></h2>
  <h1>JUDUL BUKU</h1>
  <h2><?php echo $d->judul ?></h2>
  <h1>ISI</h1>
  <h2><?php echo $d->isi ?></h2>
<?php }?>

