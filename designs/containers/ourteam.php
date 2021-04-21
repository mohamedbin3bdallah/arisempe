<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
	
		<h4><label><?php language('newourteam'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><input type="hidden" name="oldimage" value="<?php echo $team['image']; ?>" /><?php } ?>
				<table class="table table-striped">
					<tr>
						<td><?php language('en').language(' ').language('name'); ?></td>
						<td><input type="text" name="nameen" value="<?php if(isset($team['nameen'])) echo $team['nameen']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('ar').language(' ').language('name'); ?></td>
						<td><input type="text" name="namear" value="<?php if(isset($team['namear'])) echo $team['namear']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					
					<tr>
						<td><?php language('en').language(' ').language('job'); ?></td>
						<td><input type="text" name="jobtitleen" value="<?php if(isset($team['jobtitleen'])) echo $team['jobtitleen']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td><?php language('ar').language(' ').language('job'); ?></td>
						<td><input type="text" name="jobtitlear" value="<?php if(isset($team['jobtitlear'])) echo $team['jobtitlear']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					
					<tr>
						<td><?php language('en').language(' ').language('description'); ?></td>
						<td><textarea name="descriptionen" rows="5" class="form-control" required="required"><?php if(isset($team['descriptionen'])) echo $team['descriptionen']; ?></textarea></td>
					</tr>
					<tr>
						<td><?php language('ar').language(' ').language('description'); ?></td>
						<td><textarea name="descriptionar" rows="5" class="form-control" required="required"><?php if(isset($team['descriptionar'])) echo $team['descriptionar']; ?></textarea></td>
					</tr>
					
					<tr>
						<td><?php language('image'); ?></td>
						<td><input type="file" name="file" class="form-control" <?php if(!isset($_GET['oldid'])) { ?>required="required" <?php } ?> /></td>
					</tr>
					<tr>
						<td><input type="submit" name="saveourteam" class="btn btn-info" /></td>
						<td></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h4><label><?php language('ourteam'); ?></label></h4>
		<?php
		$ourteam = getOurTeam($startResults,$resultsPerPage);
		if(!empty($ourteam))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-striped">
					<tr>
						<td><?php language('en').language(' ').language('name'); ?></td>
						<td><?php language('ar').language(' ').language('name'); ?></td>
						<td><?php language('en').language(' ').language('job'); ?></td>
						<td><?php language('ar').language(' ').language('job'); ?></td>
						<td><?php language('en').language(' ').language('description'); ?></td>
						<td><?php language('ar').language(' ').language('description'); ?></td>
						<td><?php language('image'); ?></td>						
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($ourteam);$i++) { ?>
					<tr id="tr-<?php echo $ourteam[$i]['id']; ?>">
						<td><?php echo $ourteam[$i]['nameen']; ?></td>
						<td><?php echo $ourteam[$i]['namear']; ?></td>
						<td><?php echo $ourteam[$i]['jobtitleen']; ?></td>
						<td><?php echo $ourteam[$i]['jobtitlear']; ?></td>
						<td><?php echo $ourteam[$i]['descriptionen']; ?></td>
						<td><?php echo $ourteam[$i]['descriptionar']; ?></td>
						<td>
						<?php if($ourteam[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#ourteamimage-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/ourteam/thumbnail/<?php echo $ourteam[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="ourteamimage-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/ourteam/<?php echo $ourteam[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>
						<td><a href="ourteam.php?oldid=<?php echo $ourteam[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $ourteam[$i]['id'];?>" style="color:red;" class="ourteamdel glyphicon glyphicon-remove-circle"></i>
							<div id="ourteam-<?php echo $ourteam[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteourteammodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deleteourteam('<?php echo $ourteam[$i]['id']; ?>','<?php echo $ourteam[$i]['image']; ?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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
			<div class="col-md-4<?php if($lang_file == 'ar') echo ' col-md-push-8'; ?>">
			</div>
			<div class="col-md-8<?php if($lang_file == 'ar') echo ' col-md-pull-4'; ?>">
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
		
		<?php } else language("noourteam"); ?>
	</div>
</div>