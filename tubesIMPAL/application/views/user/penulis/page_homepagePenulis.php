<div class="container" style="float: right;">
  <a href="<?= base_url(); ?>index.php/Home/tambahbukuPenulis" class="btn btn-primary">BUAT</a>
  <a href="<?= base_url(); ?>Admin/tambahkota" class="btn btn-primary">UNGGAH</a>
</div>

 <table class="table table-bordered" id="table" >
      <thead>
        <tr>
          <th>No</th>
          <th>Nomor ISBN</th>
          <th>Judul Buku</th>
          <th>Jenis</th>
          <th>COVER</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($data as $d ) {?>
        <tr>
          <form action="">
                <td><?php echo $no++ ?></td>
                <td><?php echo $d->ISBN ?></td>
                <td><?php echo $d->judul ?></td>
                <td><?php echo $d->jenis ?></td>
                <td> 
                  <?php
                  if(file_exists($d->url)) {?>
                    <img src="<?php echo base_url($d->url)?> " width="50px"><?php
                  }
                  ?>
                </td>
            </form>
        </tr>
        <?php }?>
      </tbody>
    </table>