<style type="text/css">
	.row {
		height: 25vw;
	}
</style>
<?php $data['novel']= ('novel'); ?>
<?php $data['jurnal']= ('jurnal'); ?>
<?php $data['paper']= ('paper'); ?>
<?php $data['cerpen']= ('cerpen'); ?>
<?php $data['biografi']= ('biografi'); ?>
<?php $data['xxx']= ('xxx'); ?>
<div class="container">
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