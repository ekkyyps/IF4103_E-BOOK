<div class="container">
	<div class="row">
      <div class="col-md-3">
        <a href="<?= base_url(); ?>index.php/Admin/tambahbuku" class="btn btn-primary">TAMBAH</a>
      </div>
      <div class="col-md-3">
        <a href="<?= base_url(); ?>Admin/tambahkota" class="btn btn-primary" data-toggle="modal" data-target="#edit">EDIT</a>
      </div>
      <div class="col-md-3">
        <a href="<?= base_url(); ?>Admin/tambahkota" class="btn btn-primary">HAPUS</a>
      </div>
      <div class="col-md-3">
        <a href="<?= base_url(); ?>Admin/tambahkota" class="btn btn-primary">UNGGAH</a>
      </div>
    </div>

    <table class="table table-bordered" id="table">
    	<thead>
    		<tr>
    			<th>No</th>
    			<th>Nomor ISBN</th>
    			<th>Judul Buku</th>
    			<th>Penerbit</th>
    			<th>Penulis</th>
          <th>Hapus</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php $no=1; foreach ($data as $d ) {?>
    		<tr>
	    		<form action="">
		            <td><?php echo $no++ ?></td>
		            <td><?php echo $d->ISBN ?></td>
		            <td><?php echo $d->judul ?></td>
		            <td><?php echo $d->penerbit ?></td>
		            <td><?php echo $d->penulis ?></td>
		            <!-- BUTTON HAPUS BUKU -->
		            <td><a href="<?php echo site_url("Admin/hapuskota/" . $d->ISBN);?>" class="btn btn-danger" onclick="return confirm('Delete content?');">Delete</a></td>
	        	</form>
    		</tr>
    		<?php }?>
    	</tbody>
    </table>
</div>

<!--EDIT-->

  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <center><h2>EDIT</h2></center>
        </div>


        <table class="table table-bordered" id="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nomor ISBN</th>
          <th>Judul Buku</th>
          <th>Penerbit</th>
          <th>Penulis</th><
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach ($data as $d ) {?>
        <tr>
          <form action="">
                <td><?php echo $no++ ?></td>
                <td><?php echo $d->ISBN ?></td>
                <td><?php echo $d->judul ?></td>
                <td><?php echo $d->penerbit ?></td>
                <td><?php echo $d->penulis ?></td>
                <!-- BUTTON EDIT MAHASISWA -->
                <td><a href="<?php echo site_url("index.php/Admin/editBuku/" . $d->ISBN) ;?>" class="btn btn-warning"><i class="fas fa-user-edit"></i></button></td>
            </form>
        </tr>
        <?php }?>
      </tbody>
    </table>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <!-- <input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan" onclick="return confirm('Ubah Status?');">
        </div> -->
        </form>
      </div>
    </div>
  </div>


  </body>
    <script type="text/javascript">
      $(document).ready( function () {
          $('#table').DataTable();
      } );
    </script>