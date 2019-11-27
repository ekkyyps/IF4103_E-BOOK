
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
  h3{
    text-align: center; 
    padding-top: 7px;
  }
  .card .col-xl-2{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 15.5vw;
    height: 23vw;
    border-radius:5px;
    background-color: white; 
    margin-right: 15px;
    font-family: "Verdana", sans-serif;
    font-weight: bold;
    margin-top: 55px;
  }
  .container .card .col-xl-2 .btn{
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
  .card .col-xl-2 .btn:hover{
    opacity: 0.8; 
  }

  /*edit*/
  .col-sm-2 {
    margin-left: 0.5vw;
    margin-right: 2vw;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 15vw;
    height: 20vw;
    border-radius:5px;
    background-color: white; 
    font-family: "Verdana", sans-serif;
    font-weight: bold;
  }
  .card .card-body {
    padding-top: 1vw;
    margin-left: 1vw;
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
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a value="<?php echo $data['novel']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['novel']);?>" class="btn btn-primary">Telusuri Novel</a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">JURNAL</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a value="<?php echo $data['jurnal']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['jurnal']);?>" class="btn btn-primary">Telusuri  Jurnal</a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PAPER</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a value="<?php echo $data['paper']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['paper']);?>" class="btn btn-primary">Telusuri Paper</a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CERITA PENDEK</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a value="<?php echo $data['cerpen']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['cerpen']);?>" class="btn btn-primary">Telusuri Cerpen</a>
      </div>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">BIOGRAFI</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a value="<?php echo $data['biografi']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['biografi']);?>" class="btn btn-primary">Telusuri Biografi</a>
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