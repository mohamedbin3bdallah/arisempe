<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
	
		<h4><label><?php language('newsubcategory'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><?php } ?>
				<table class="table table-striped">
					<tr>
						<td><?php language('en'); language(' '); language('title'); ?></td>
						<td><input type="text" name="titleen" value="<?php if(isset($_GET['titleen'])) echo $_GET['titleen']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('ar'); language(' '); language('title'); ?></td>
						<td><input type="text" name="titlear" value="<?php if(isset($_GET['titlear'])) echo $_GET['titlear']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('icon'); ?></td>
						<td><input type="text" name="icon" value="<?php if(isset($_GET['icon'])) echo $_GET['icon']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<!-- <tr>
						<td><?php language('image'); ?></td>
						<td><input type="file" name="file" class="form-control" required="required" /></td>
					</tr> -->
					<tr>
						<td><input type="submit" name="savesubcategory" class="btn btn-info" /></td>
						<td></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h4><label><?php language('subcategories'); ?></label></h4>
		<?php
		$subcategories = getSubCategories($_GET['id'],$startResults,$resultsPerPage);
		if(!empty($subcategories))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<td><?php language('en'); language(' '); language('title'); ?></td>											
						<td><?php language('ar'); language(' '); language('title'); ?></td>
						<td><?php language('icon'); ?></td>						
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($subcategories);$i++) { ?>
					<tr id="tr-<?php echo $subcategories[$i]['id']; ?>">
						<td><a href="services.php?id=<?php echo $subcategories[$i]['id']; ?>"><?php echo $subcategories[$i]['titleen']; ?></a></td>
						<td><a href="services.php?id=<?php echo $subcategories[$i]['id']; ?>"><?php echo $subcategories[$i]['titlear']; ?></a></td>
						<td><i class="fa fa-<?php echo $subcategories[$i]['icon']; ?>"></i></td>
						<!-- <td>
						<?php //if($subcategories[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#subcategorie-<?php //echo $i; ?>">
								<img class="img-responsive" src="../uploads/services/thumbnail/<?php //echo $subcategories[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="subcategorie-<?php //echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/services/<?php //echo $subcategories[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php //} ?>
						</td> -->
						<td><a href="subcategories.php?id=<?php echo $_GET['id']; ?>&oldid=<?php echo $subcategories[$i]['id']; ?>&titleen=<?php echo $subcategories[$i]['titleen']; ?>&titlear=<?php echo $subcategories[$i]['titlear']; ?>&icon=<?php echo $subcategories[$i]['icon']; ?>"><i style="color:green;" class="subcategorydel glyphicon glyphicon-edit"></i></a></td>
						<td>
							<?php if($subcategories[$i]['haschilds'] == 0) { ?>
							<i id="<?php echo $subcategories[$i]['id'];?>" style="color:red;" class="subcategorydel glyphicon glyphicon-remove-circle"></i>
							<div id="subcategories-<?php echo $subcategories[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteservicemodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletesubcategory('<?php echo $subcategories[$i]['id'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php language('no'); ?></button>
										</center>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
				</table>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4<?php if($lang_file == 'ar') echo ' col-md-push-8'; ?>">
			</div>
			<div class="col-md-8<?php if($lang_file == 'ar') echo ' col-md-pull-4'; ?>">
				<nav>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=1"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?id=<?php echo $_GET['id']; ?>&page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		
		<?php } else language("noservices"); ?>
	</div>
</div>