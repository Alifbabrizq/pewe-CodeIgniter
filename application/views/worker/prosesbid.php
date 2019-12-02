<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">

</div>
			<form action="<?php echo base_url();?>index.php/Project_bid/store/<?= $id ?>" method="post"
				enctype="multipart/form-data">
				
				<input  type="text" class="form-control" name="harga"
					placeholder="Harga">
				<input class="button" style="" type="submit" name="submit" value="Place Bid">
			</form>
