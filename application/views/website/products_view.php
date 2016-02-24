
<div class="container" >
	<div class="row">
	    <div class="col-md-4">
	    	<?php
	    		$pic_path = base_url()."public/img/".$userfile;
	    	?>
			<span class="products">
				<img id="largeImage" src="<?php echo $pic_path; ?>">
			</span><br>
			<span class="thumbs">
				<?php foreach ($thumbs as $row) :?>
					<?php $thumb = $row->userfile;?>

					<a href="<?php echo base_url()."public/img/".$thumb; ?>">
					<img src="<?php echo base_url()."public/img/".$thumb; ?>">
					</a>
				<?php endforeach ;?>
			</span>
	    </div>
	    <div class="col-md-4">
		    <span class="products">
		    	<h1><?= $title;?></h1>
		        <h4>ID : <?=$id; ?></h4>
			</span>
	        <?php
	        	$currency = "BGL";
	        	$price = number_format($price, 2);
	        	$price = str_replace('.00', "", $price);
	        ?>
	        <h4>Цена: <?=$currency.' '.$price; ?></h4>
			<?php
				echo nl2br (character_limiter($content,200));
			?>
			<span class="products">
		        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
		        <p><a class="btn btn-primary" href="<?=site_url('website/cart/add/'.$id);?>" role="button">Add to cart </a></p>
		    </span>
	    </div>
	    <div class="col-md-4">
	    </div>
    </div>
</div>


