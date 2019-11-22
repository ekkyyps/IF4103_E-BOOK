<div class="container">
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
                    <td><a href="<?php echo site_url("index.php/Admin/hpsBUKU/". $d->ISBN);?>" class="btn btn-danger" onclick="return confirm('Delete content?');">Delete</a></td>
                </form>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <div class="col-md-3">
        <a href="<?= base_url(); ?>index.php/Admin" class="btn btn-primary">Kembali</a>
    </div>
    
</div>