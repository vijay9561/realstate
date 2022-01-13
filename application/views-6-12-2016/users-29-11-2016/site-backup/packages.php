<style>
.portfolio p {
    font-size: 1.1em;
    color: #555;
    line-height: 1.6em;
   width: 100%;
    margin: 0 auto;
    text-align: justify;
}
</style>
<div class="portfolio" id="gallery">		
		<div class="container">
			<h3 class="title">Packages</h3>
			
			
			<div class="portfolio-grids">	
			<div class="row">
			<?php $data=$this->Users_Model->get_packages_details(); 
			foreach($data as $rows){ ?>			
				<div class="col-md-4">
			 <div style="border:1px solid #0099CC; margin-right:10px; margin-bottom:10px; padding:5px;">
						<img src="<?php  echo base_url();?>adminassets/upload/packages/<?php echo $rows->package_image; ?>" class="img-responsive" alt=""/>
						<div class="mask">
							<p><strong>Package Name:</strong> &nbsp;<?php echo $rows->package_title; ?></p>
							<p><strong>Package Cost:</strong> &nbsp;<?php echo $rows->package_cost; ?></p>
							<p><strong>Package Car Type:</strong> &nbsp;<?php echo $rows->package_car_type; ?></p>
							<p><strong>Package Car one/two Way:</strong> &nbsp;<?php echo $rows->one_or_two_way; ?></p>
							<p><strong>Package Description:</strong> &nbsp;<?php echo $rows->package_description; ?></p>
						</div>
						</div>
				</div>
				<?php } ?>
				</div>
				<div class="clearfix"> </div>	
				<script src="<?php echo base_url(); ?>assets/js/lightbox-plus-jquery.min.js"> </script>
			</div>						
		</div>
	</div>