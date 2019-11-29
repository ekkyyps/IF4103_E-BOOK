
<style type="text/css">
  /*.row{
    height: 25vw;
  }
  .row.heading h2 {
    color: #000000;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
  }
  .ul{
    margin:0;
    padding:0;
    list-style:none;
  }*/
  h5{
    font-size: 22px;
    text-align: center;
    font-weight: bold;
    padding-right: 7px;
  }
  p{
    margin-left: 1vw;
    margin-top: 1.5vw;
    line-height: 25px;
  }
/*  .card .col-xl-2:hover{
    background: #ff0057;
    transform: translateY(0);
    box-shadow: 0 8px 16px 0 rgba()
  }*/
/*  .card .col-sm-2 .btn{
    background-color:#14868c;
    border-radius: 5px;
    width: 15.5vw;
    height: 40px;
    color: white;
    border-color: none;
    float: right;
    font-family: Courier New;
    font-weight: bold;
    margin-top: 20vw;
    margin-right: 1px;
  }
  .card .col-sm-2 .btn:hover{
    opacity: 0.8; 
  }*/

  /*edit*/
  .col-sm-2 {
    margin-left: 0vw;
    margin-right: 2.5vw;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 16vw;
    height: 22vw;
    border-radius:8px;
    background-color: white; 
    margin-top: 5vw;
  }
  .card:hover{
    box-shadow: 0 8px 16px 3px rgba(0,0,0,1);

  }
  .card .card-body {
    padding-top: 1vw;
    font-family: "Verdana", sans-serif;
  }
  .container .row .col-sm-2 .card-body .btn{
    background-color:#14868c;
    border-radius: 5px;
    width: 12vw;
    height: 40px;
    color: white;
    border-color: none;
    font-family: Courier New;
    font-weight: bold;
    margin-left: 2vw;
  }


</style>

<?php $data['novel']= ('novel'); ?>
<?php $data['jurnal']= ('jurnal'); ?>
<?php $data['paper']= ('paper'); ?>
<?php $data['cerpen']= ('cerpen'); ?>
<?php $data['biografi']= ('biografi'); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">NOVEL</h5>
          <p class="card-text">Kumpulan cerita dari tokoh yang mengandung rangkian cerita kehidupan. Nikmati beragam karya dari penulis terkenal dan keseruan dari ceritanya.</p>
          <a value="<?php echo $data['novel']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['novel']);?>" class="btn" style="margin-top: 3.8vw;">Telusuri Novel</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">JURNAL</h5>
          <p class="card-text">Tulisan khusus yang memuat artikel dari bidang ilmu tertentu. Menambah wawasan dan pengetahuan anda.</p>
          <a value="<?php echo $data['jurnal']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['jurnal']);?>" class="btn" style="margin-top: 5.5vw; ">Telusuri  Jurnal</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">PAPER</h5>
          <p class="card-text">Karya Tulis Ilmiah terperinci dan hasil dari suatu penelitian atau riset. Tersedia lengkap dan informatif.</p>
          <a value="<?php echo $data['paper']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['paper']);?>" class="btn" style="margin-top: 5.5vw;">Telusuri Paper</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title" style="font-size:18px;">CERITA PENDEK</h5>
          <p class="card-text">Kumpulan dari prosa fiksi yang menceritakan satu peristiwa istimewa dari tokoh. Kumpulan cerita pendek yang inovatif, kreatif, dan penuh inspiratif.</p>
          <a value="<?php echo $data['cerpen']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['cerpen']);?>" class="btn" style="margin-top: 4vw;">Telusuri Cerpen</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">BIOGRAFI</h5>
          <p class="card-text">Riwayat hidup seseorang yang ditulis oleh orang lain. Penuh inspiratif, bermanfaat, dan informatif.</p>
          <a value="<?php echo $data['biografi']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['biografi']);?>" class="btn" style="margin-top: 7.5vw;">Telusuri Biografi</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 
  <div class="card">
      <div class="row-inline">
          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>NOVEL</h3>
            </div>
            <a value="<?php echo $data['novel']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['novel']);?>">
            <input type="submit" class="btn" value="Telusuri"></a>
          </div>

          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>JURNAL</h3>
            </div>
            <a value="<?php echo $data['jurnal']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['jurnal']);?>">
            <input type="submit" class="btn" value="Telusuri"></a>
          </div>

          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>PAPER</h3>
            </div>
            <a value="<?php echo $data['paper']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['paper']);?>">
            <input type="submit" class="btn" value="Telusuri"></a>
          </div>

          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>CERPEN</h3>
            </div>
            <a value="<?php echo $data['cerpen']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['cerpen']);?>">
            <input type="submit" class="btn" value="Telusuri"></a>
          </div>

          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>BIOGRAFI</h3>
            </div>
            <a value="<?php echo $data['biografi']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['biografi']);?>">
            <input type="submit" class="btn" value="Telusuri"></a>
          </div>
    
      </div>
  </div>
</div> -->