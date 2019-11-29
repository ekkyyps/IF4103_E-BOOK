  <table class="table table-bordered" id="table" >
    	<thead>
    		<tr>
    			<th>No</th>
    			<th>Nomor ISBN</th>
    			<th>Judul Buku</th>
    			<th>Penerbit</th>
    			<th>Penulis</th>
          <th>Jenis</th>
          <th>COVER</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php $no=1; foreach ($data as $d ) {?>
    		<tr class="clickable" onclick="window.location='<?php echo base_url('index.php/Home/pageisibuku/'.$d->ISBN);?>'" href="" >
          <a value="<?php echo $d->ISBN; ?>" href="<?php echo base_url('index.php/Home/pageisibuku/'.$d->ISBN);?>" class="btn" style="margin-top: 3.8vw;  visibility: hidden">Telusuri</a>
	    		<form action="">
		            <td><?php echo $no++ ?></td>
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


<!-- <script>
$(document).ready(function(){
 $('tr.clickable').click(function(){
  window.location = $(this).find("a").attr("href");
 });
 
});
</script> -->