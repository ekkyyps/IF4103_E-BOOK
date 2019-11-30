<style type="text/css">
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
  .col-sm-2 {
    margin-left: 0vw;
    margin-right: 2.5vw;
  }
  .card {
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0);
    transition: 0.3s;
    width: 16vw;
    height: 22vw;
    border-radius:8px;
    background-color: white; 
    margin-top: 5vw;

  }
  .card:hover{
    box-shadow: 0 6px 10px 0px rgba(0,0,0,0.2);
    cursor: pointer;
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
        <div class="card-body clickable">
          <h5 class="card-title">NOVEL</h5>
          <p class="card-text">Kumpulan cerita dari tokoh yang mengandung rangkian cerita kehidupan. Nikmati beragam karya dari penulis terkenal dan keseruan dari ceritanya.</p>
          <a value="<?php echo $data['novel']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['novel']);?>" class="btn" style="margin-top: 3.8vw;  visibility: hidden">Telusuri Novel</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card">
        <div class="card-body clickable">
          <h5 class="card-title">JURNAL</h5>
          <p class="card-text">Tulisan khusus yang memuat artikel dari bidang ilmu tertentu. Menambah wawasan dan pengetahuan anda.</p>
          <a value="<?php echo $data['jurnal']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['jurnal']);?>" class="btn" style="margin-top: 5.5vw;  visibility: hidden">Telusuri  Jurnal</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card">
        <div class="card-body clickable">
          <h5 class="card-title">PAPER</h5>
          <p class="card-text">Karya Tulis Ilmiah terperinci dan hasil dari suatu penelitian atau riset. Tersedia lengkap dan informatif.</p>
          <a value="<?php echo $data['paper']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['paper']);?>" class="btn" style="margin-top: 5.5vw;  visibility: hidden">Telusuri Paper</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card">
        <div class="card-body clickable">
          <h5 class="card-title" style="font-size:18px;">CERITA PENDEK</h5>
          <p class="card-text">Kumpulan dari prosa fiksi yang menceritakan satu peristiwa istimewa dari tokoh. Kumpulan cerita pendek yang inovatif, kreatif, dan penuh inspiratif.</p>
          <a value="<?php echo $data['cerpen']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['cerpen']);?>" class="btn" style="margin-top: 2vw;  visibility: hidden">Telusuri Cerpen</a>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card">
        <div class="card-body clickable">
          <h5 class="card-title">BIOGRAFI</h5>
          <p class="card-text">Riwayat hidup seseorang yang ditulis oleh orang lain. Penuh inspiratif, bermanfaat, dan informatif.</p>
          <a value="<?php echo $data['biografi']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['biografi']);?>" class="btn" style="margin-top: 7.5vw; visibility: hidden">Telusuri Biografi</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
 $('.clickable').click(function(){
  window.location = $(this).find("a").attr("href");
 });
 
});
</script>
