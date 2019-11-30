<style type="text/css">
  h3{
    text-align: center;
    font-family: Verdana;
    font-weight: bold;

  }
  .table{
    margin-top: 15px;
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
  .row{
    margin-left: 7vw;
  }
  .container{

  }
  

</style>



<h3>DAFTAR KARYA</h3>
  <div class="container ">
      <table class="table table-responsive" id="table" >
      	<thead>
      		<tr>
      			<th>No</th>
      			<th>Nomor ISBN</th>
      			<th>Judul Buku</th>
      			<th>Penerbit</th>
      			<th>Penulis</th>
            <th>Jenis</th>
            <th>Sampul</th>
            <th>Admin Pengunggah</th>
      		</tr>
      	</thead>
      	<tbody>
      		<?php $no=1; foreach ($data as $d ) {?>
      		<tr class="clickable" onclick="window.location='<?php echo base_url('index.php/Admin/pageisibuku/'.$d->ISBN);?>'" href="" >
  	    		<form action="">
  		            <td><?php echo $no++ ?></td>
  		            <td><?php echo $d->ISBN ?></td>
  		            <td><?php echo $d->judul ?></td>
  		            <td><?php echo $d->penerbit ?></td>
  		            <td><?php echo $d->penulis ?></td>
                  <td><?php echo $d->jenis ?></td>
                  <td> 
                    <?php
                    if(file_exists($d->url)) {?>
                      <img src="<?php echo base_url($d->url)?> " width="50px"><?php
                    }
                    ?>
                  </td>
                  <td><?php echo $d->no_pegawai?></td>
  	        	</form>
      		</tr>
      		<?php }?>
      	</tbody>
      </table>
        <div class="row">
        <div class="col-md-3">
          <a href="<?= base_url(); ?>index.php/Admin/tambahbuku" class="btn btn-primary">TAMBAH</a>
        </div>
        <div class="col-md-3">
          <a href="" class="btn btn-primary" data-toggle="modal" data-target="#edit">EDIT</a>
        </div>
        <div class="col-md-3">
          <a href="<?= base_url(); ?>index.php/Admin/hapusBuku" class="btn btn-primary">HAPUS</a> 
        </div>
        <div class="col-md-3">
          <a href="<?= base_url(); ?>index.php/Admin/unggahbuku" class="btn btn-primary">UNGGAH</a>
        </div>
      </div>
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