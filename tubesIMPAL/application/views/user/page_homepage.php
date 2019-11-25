
<style type="text/css">
	.row{
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
  }

</style>

<?php $data['novel']= ('novel'); ?>
<?php $data['jurnal']= ('jurnal'); ?>
<?php $data['paper']= ('paper'); ?>
<?php $data['cerpen']= ('cerpen'); ?>
<?php $data['biografi']= ('biografi'); ?>
<?php $data['xxx']= ('xxx'); ?>
<div class="container">
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
</div>