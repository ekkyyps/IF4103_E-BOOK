<div class="container mt-10">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header">
                    <h2>Edit Data Buku</h2>
                </div>
                <br>
                <div class="card-body">
                    <?php if(validation_errors() ) :?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors();?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="ISBN">ISBN : <?php echo $data?></label>
                           <!--  <input type="number" name="ISBN" class="form-control" id="ISBN" placeholder="<?php echo $data?>"> -->
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" id="penerbit" placeholder="Penerbit">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis" class="form-control" id="penulis" placeholder="Penulis">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Isi</label>
                            <input type="text" name="isi" class="form-control" id="isi" placeholder="Isi" style="height: 100px;">
                        </div>
                        <button class="btn btn-primary float-right" type="submit" name="tambah">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>