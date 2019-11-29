<style type="text/css">
  h3{
    text-align: center;
    font-family: Verdana;
    font-weight: bold;

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
</style>

<div class="container">
  <h3>DAFTAR KARYA</h3>
  <table class="table table-responsive" id="table" >
    	<thead>
    		<tr>
    			<!-- <th>No</th> -->
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


<!-- <script>
$(document).ready(function(){
 $('tr.clickable').click(function(){
  window.location = $(this).find("a").attr("href");
 });
 
});
</script> -->