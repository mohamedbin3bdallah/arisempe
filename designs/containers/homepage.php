<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
	<h4><label><?php language('home'); ?></label></h4>
		<?php
		$carousel = getCarousel();
		if(!empty($carousel))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-striped">
					<tr>						
						<td><?php language('image'); ?></td>
						<td><?php language('newimage'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($carousel);$i++) { ?>
					<tr id="tr-<?php echo $carousel[$i]['id']; ?>">
						<td>
						<?php if($carousel[$i]['name'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#carousel-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/carousel/thumbnail/<?php echo $carousel[$i]['name']; ?>" style="width:75px;">
							</a>
							<div id="carousel-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/carousel/<?php echo $carousel[$i]['name']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>						
						<td>
							<form enctype="multipart/form-data" method="POST" action="">
								<input type="hidden" name="oldimage" value="<?php echo $carousel[$i]['name']; ?>" />
								<input type="hidden" name="oldid" value="<?php echo $carousel[$i]['id']; ?>" />
								<div class="fileUpload btn btn-primary">
									<span><?php language("changeimage"); ?></span>									
									<input type="file" name="file" class="upload list-label" onchange="this.form.submit();" />
								</div>
							</form>
						</td>
					</tr>
				<?php } ?>
				</table>
				</div>
			</div>
		</div>

		<?php } else language("noposts"); ?>
	</div>
</div>