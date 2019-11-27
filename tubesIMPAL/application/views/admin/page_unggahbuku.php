 <h1>Daftar Buku Penulis</h1>
 <table class="table table-bordered" id="table" >
      <thead>
        <tr>
          <th>No</th>
          <th>Nomor ISBN</th>
          <th>Judul Buku</th>
          <th>Jenis</th>
          <th>Isi</th>
          <th>COVER</th>
          <th>Nama penulis</th>
          <th>Atur</th>
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
                <td><?php echo $d->isi ?></td>
                <td> 
                  <?php
                  if(file_exists($d->url)) {?>
                    <img src="<?php echo base_url($d->url)?> " width="50px"><?php
                  }
                  ?>
                </td>
                <td><?php echo $d->uname ?></td>
                <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#atur<?php echo $d->ISBN ?>"><i class="fas fa-user-edit"></i></button></td>
            </form>
        </tr>
        <?php }?>
      </tbody>
    </table>

<div class="col-md-3" style="float: left;">
  <a href="<?= base_url(); ?>index.php/Admin" class="btn btn-danger">Kembali</a>
</div>


<?php $no=1; foreach ($data as $d ) {?>
  <div class="modal fade" id="atur<?php echo $d->ISBN ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>ATUR BUKU PENULIS</h2></center>
        </div>
        <div class="modal-body">
        <!-- isi form ini -->
          <form method="post" action="<?php echo site_url("index.php/Admin/publishbuku");?>">
            <div class="form-group">
              <label for="formGroupExampleInput">ISBN</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="isbn" name="ISBN" value="<?php echo $d->ISBN ?>"  required>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Judul Buku</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" name="judul"  value="<?php echo $d->judul?>" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Penerbit (Nomor Pegawai Admin)</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Penerbit" name="penerbit"  value="<?php echo $this->session->userdata("no_pegawai"); ?>" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Penulis</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Penulis" name="penulis"  value="<?php echo $d->uname?>" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Jenis Buku</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Jenis" name="jenis"  value="<?php echo $d->jenis?>" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Cover</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Cover" name="cover"  value="<?php echo $d->url?>" readonly>
            </div>
            <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="type" name="type"  value="" readonly>
            <div class="form-group">
              <label for="formGroupExampleInput">Isi</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Isi" name="isi"  value="<?php echo $d->isi?>" readonly>
            </div>
            <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Nama Pegawai" name="no_pegawai"  value="<?php echo $this->session->userdata("no_pegawai"); ?>" readonly>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <input  type="submit" class="btn btn-primary" id="publish" value="Publish" placeholder="Publish" onclick="">
        </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>

<script type="text/javascript">
    $(document).ready( function () {
        $('#table').DataTable();
    } );
  </script>