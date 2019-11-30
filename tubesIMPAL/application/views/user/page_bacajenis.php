<style type="text/css">
  h3{
    text-align: center;
    font-family: Verdana;
    font-weight: bold;

  }
  .table{
    table-layout: auto; 
  }
  .table{
    table-layout: fixed;

    text-align: center;
  }
  thead{
    background-color:#14868c;
    padding-top: 10px;
  }
  th{
    text-align: center;
    background-color:#14868c;
    color: white;
  }
  .btn{
    background-color: #9d0b0b;
    border-radius: 5px;
    width: 100px; 
    height: 35px;
    color: white;
    border-color: none;
    font-family: Courier New;
    font-weight: bold;
    transition: 0.3s;
  }
  .btn:hover{
    opacity: 0.8;
  }
</style>

<div class="container">
<!--   <h3>DAFTAR BACA</h3> -->
  <a href="<?= base_url(); ?>index.php/Home/setelahloginpembaca/" class="btn">kembali</a>
    <table class="table table-responsive" id="table" >

</style>

<div class="container">
  <h3>DAFTAR BUKU</h3>
  <table class="table table-responsive" id="table" >

    	<thead>
    		<tr>
    			<th>Nomor ISBN</th>
    			<th>Judul Buku</th>
    			<th>Penerbit</th>
    			<th>Penulis</th>
          <th>Jenis</th>
          <th>Sampul</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php $no=1; foreach ($data as $d ) {?>
    		<tr class="clickable" onclick="window.location='<?php echo base_url('index.php/Home/pageisibuku/'.$d->ISBN);?>'" href="" >
          <!-- <a value="<?php echo $d->ISBN; ?>" href="<?php echo base_url('index.php/Home/pageisibuku/'.$d->ISBN);?>" class="btn" style="margin-top: 3.8vw;  visibility: hidden">Telusuri</a> -->
	    		<form action="">
		            <!-- <td><?php echo $no++ ?></td> -->
		            <td><?php echo $d->ISBN ?></td>
		            <td><?php echo $d->judul ?></td>
		            <td><?php echo $d->penerbit ?></td>
		            <td><?php echo $d->penulis ?></td>
                <td><?php echo $d->jenis ?></td>
                <td> 
                  <?php
                  if(file_exists($d->url)) {?>
                    <img src="<?php echo base_url($d->url)?> " width="50px"><?php
                  }
                  ?>
                </td>
	        	</form>
    		</tr>
    		<?php }?>
    	</tbody>
    </table>
</div>

