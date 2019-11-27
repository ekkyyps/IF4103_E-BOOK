
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

</style>

<?php $data['novel']= ('novel'); ?>
<?php $data['jurnal']= ('jurnal'); ?>
<?php $data['paper']= ('paper'); ?>
<?php $data['cerpen']= ('cerpen'); ?>
<?php $data['biografi']= ('biografi'); ?>
<?php $data['xxx']= ('xxx'); ?>

<div class="container">
  <div class="card">
      <div class="row-inline">
          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>NOVEL</h3>
            </div>
            <input type="submit" class="btn" value="Telusuri">
          </div>

          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>JURNAL</h3>
            </div>
            <input type="submit" class="btn" value="Telusuri">
          </div>

          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>PAPER</h3>
            </div>
            <input type="submit" class="btn" value="Telusuri">
          </div>

          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>CERPEN</h3>
            </div>
            <input type="submit" class="btn" value="Telusuri">
          </div>

          <div class="col-xl-2 col-md-6 mb-4">
            <div class="card border-0 shadow">
              <h3>BIOGRAFI</h3>
            </div>
            <input type="submit" class="btn" value="Telusuri">
          </div>
    
      </div>
  </div>
</div>

























<!-- <div class="container">
  <section class="padding-lg">
    <div class="container">
      <div class="row heading heading-icon">
        <h2>CATALOG</h2>
      </div>      
    </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <h3><a value="<?php echo $data['novel']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['novel']);?>">NOVEL</a></h3>
            <p>Karangan prosa yang panjang mengandung rangkaian cerita kehidupan seseorang dengan orang di sekelilingnya dengan menonjolkan watak dan sifat setiap pelaku.</p>
            <ul class="follow-us clearfix"> 
              <button class=> </button>
            </ul>
          </div>
      </li>
      
      </div>
  </section>
  <div class="row">
  	<a value="<?php echo $data['novel']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['novel']);?>">
    	<div class="col-lg-4">
      		Novel
    	</div>
	</a>
	<a value="<?php echo $data['jurnal']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['jurnal']);?>">
    	<div class="col-lg-4">
      		Jurnal
    	</div>
	</a>
	<a value="<?php echo $data['paper']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['paper']);?>">
    	<div class="col-lg-4">
      		paper
    	</div>
	</a>
	</div>
  <div class="row">
  	<a value="<?php echo $data['cerpen']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['cerpen']);?>">
    	<div class="col-lg-4">
      		CERPEN
    	</div>
	</a>
	<a value="<?php echo $data['biografi']; ?>" href="<?php echo base_url('index.php/Home/pagejenis/'.$data['biografi']);?>">
    	<div class="col-lg-4">
      		Biografi
    	</div>
	</a>
	<a href="">
    	<div class="col-lg-4">
      		One of three columns
    	</div>
	</a>
  </div>
</div> -->