<div class="container mt-10">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card border-primary">
                <div class="card-header">
                    <h2>Masukkan Data Buku</h2>
                </div>
                <br>
                <div class="card-body">
                    <?php echo form_open_multipart('index.php/Admin/tambahbuku')?>
                    <?php if(validation_errors() ) :?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors();?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="ISBN">ISBN</label>
                            <input type="number" name="ISBN" class="form-control" id="ISBN" placeholder="ISBN">
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
                            <label for="jenis">Jenis Buku</label>
                            <select name="jenis">
                                <option value="novel">novel</option>
                                <option value="jurnal">jurnal</option>
                                <option value="paper">paper</option>
                                <option value="biografi">biografi</option>
                                <option value="cerpen">cerpen</option>
                            </select>
                            <!-- <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis Buku"> -->
                        </div>
                        <div class="form-group">
                            <label>Cover</label>
                            <input type="file" name="image" class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <label for="penulis">Isi</label>
                            <input type="text" name="isi" class="form-control" id="isi" placeholder="Isi" style="height: 100px;">
                        </div>
                        <button class="btn btn-primary float-right" type="submit" name="tambah" style="float: right;">Tambah</button>
                    </form>
                    <?php echo form_close() ?>
                </div>
                <div class="col-md-3" style="float: left;">
                    <a href="<?= base_url(); ?>index.php/Admin" class="btn btn-danger">Batal</a>
                </div>
            </div>
        </div>
    </div>
</div>