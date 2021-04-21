<script type="text/javascript">
tinymce.init({
    selector: "textarea",
	plugins: "textcolor",
	toolbar: "forecolor backcolor",
 });
</script>

<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
		<h4><label><?php language('offers'); ?></label></h4><br>
	
		<h5><label style="color:blue;"><?php language('newoffer'); ?></label></h5>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid'],$offer['image']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><input type="hidden" name="oldimage" value="<?php echo $offer['image']; ?>" /><?php } ?>
				<table class="table table-bordered">
					<tr>
						<td class="info"><?php language('en').language(' ').language('title'); ?></td>
						<td class="warning"><input type="text" name="titleen" value="<?php if(isset($offer['titleen'])) echo $offer['titleen']; ?>" maxlength="250" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar').language(' ').language('title'); ?></td>
						<td class="warning"><input type="text" name="titlear" value="<?php if(isset($offer['titlear'])) echo $offer['titlear']; ?>" maxlength="250" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('en').language(' ').language('description'); ?></td>
						<td class="warning"><textarea name="descriptionen" rows="5"><?php if(isset($offer['descriptionen'])) echo $offer['descriptionen']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar').language(' ').language('description'); ?></td>
						<td class="warning"><textarea name="descriptionar" rows="5"><?php if(isset($offer['descriptionar'])) echo $offer['descriptionar']; ?></textarea></td>
					</tr>
					<!-- <tr>
						<td><?php //language('icon'); ?></td>
						<td><input type="text" name="icon" value="<?php //if(isset($offer['icon'])) echo $offer['icon']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr> -->
					<tr>
						<td class="info"><?php language('image'); ?></td>
						<td class="warning"><input type="file" name="file" class="form-control" <?php if(!isset($_GET['oldid']) || $_GET['oldid'] == '') { ?> required="required" <?php } ?> /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="saveoffer" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h5><label style="color:blue;"><?php language('offers'); ?></label></h5>
		<?php
		$offers = getOffers($startResults,$resultsPerPage);
		if(!empty($offers))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('en').language(' ').language('title'); ?></td>											
						<td><?php language('ar').language(' ').language('title'); ?></td>
						<td><?php language('en').language(' ').language('description'); ?></td>
						<td><?php language('ar').language(' ').language('description'); ?></td>
						<td><?php language('image'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($offers);$i++) { ?>
					<tr id="tr-<?php echo $offers[$i]['id']; ?>">
						<td><?php echo $offers[$i]['titleen']; ?></td>
						<td><?php echo $offers[$i]['titlear']; ?></td>
						<td><?php echo $offers[$i]['descriptionen']; ?></td>
						<td><?php echo $offers[$i]['descriptionar']; ?></td>
						<td>
						<?php if($offers[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#offerimage-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/offers/thumbnail/<?php echo $offers[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="offerimage-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/offers/<?php echo $offers[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>
						<td><a href="offers.php?oldid=<?php echo $offers[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $offers[$i]['id'];?>" style="color:red;" class="offerdel glyphicon glyphicon-remove-circle"></i>
							<div id="offer-<?php echo $offers[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteoffermodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deleteoffer('<?php echo $offers[$i]['id'];?>','<?php echo $offers[$i]['image'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php language('no'); ?></button>
										</center>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php } ?>
				</table>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-2<?php if($lang_file == 'ar') echo ' col-md-push-10'; ?>">
			</div>
			<div class="col-md-10<?php if($lang_file == 'ar') echo ' col-md-pull-2'; ?>">
				<nav>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li><a href="?page=1"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		
		<?php } else language("nooffer"); ?>
	</div>
</div>