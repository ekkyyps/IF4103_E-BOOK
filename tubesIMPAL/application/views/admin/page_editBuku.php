<div class="container mt-10">
    <div class="row mt-3">
        <div class="col-md-3">
        </div>
        <div class="col-md-6" style="border-style: solid;box-shadow: 5px 5px 5px grey; background-color: white">
            <div class="card border-primary">
                <div class="card-header">
                    <h2 style="text-align: center">Edit Data Buku</h2>
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
                            <label for="penulis">Isi</label>
                            <!-- <input type="text" name="isi" class="form-control" id="isi" placeholder="Isi" style="height: 100px;"> -->
                            <textarea rows="20" name="isi" class="form-control" id="isi" placeholder="<?php echo $data?>" value=""></textarea>
                        </div>
                        
                        <div class="col-md-3" style="float: left;">
                            <a href="<?= base_url(); ?>index.php/Admin" class="btn btn-secondary" style="background-color: grey;color: white">Kembali</a>
                        </div>
                        <div class="col-md-3" style="float: right;">
                            <button class="btn btn-primary float-right" type="submit" name="tambah">Tambah</button>
                        </div>
                        <br><br><br>
                    </form>
                </div>
            </div>
            </div><br>
    </div>
    <br>
</div>
