
<style type="">
  h3{
    text-align: center;
    font-family: Verdana;
    font-weight: bold;

  }
  .table{
    table-layout: fixed;
    text-align: center;
}
  thead{
    background-color:#14868c;
    padding-top: 10px;
  }
  th{
    text-align: center;
    background-color:#14868c;
    color: white;
  }
  .btn{
    margin-left: 80vw;
  }
</style>

<h3>DAFTAR KARYA</h3>
<div class="container" style="">
<table class="table table-responsive" id="table" >
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
                    <img src="<?php echo base_url($d->url)?>" width="50px"><?php
                  }
                  ?>
                </td>
            </form>
        </tr>
        <?php }?>
      </tbody>
</table>
  <a href="<?= base_url(); ?>index.php/Home/tambahbukuPenulis" class="btn btn-primary">BUAT BARU</a>
<!--   <a href="<?= base_url(); ?>Admin/tambahkota" class="btn btn-primary">UNGGAH</a> -->
</div>