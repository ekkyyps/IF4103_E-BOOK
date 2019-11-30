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
</style>

<h3>DAFTAR KARYA</h3>
<div class="container">
    <table class="table table-responsive" id="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor ISBN</th>
                <th>Judul Buku</th>
                <th>Penerbit</th>
                <th>Penulis</th>
                <th>Jenis</th>
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
                    <td><?php echo $d->jenis ?></td>
                    <td><a href="<?php echo site_url("index.php/Admin/hpsBUKU/". $d->ISBN);?>" class="btn btn-danger" onclick="return confirm('Delete content?');">Delete</a></td>
                </form>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <div class="col-md-3">
        <a href="<?= base_url(); ?>index.php/Admin" class="btn btn-secondary" style="background-color: grey;color: white">Kembali</a>
    </div>
    
</div>