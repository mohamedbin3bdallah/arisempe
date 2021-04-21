<script type="text/javascript">
tinymce.init({
    selector: "textarea"
 });
</script>

<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
	<h4><label><?php language('about'); ?></label></h4>
		<?php
		$about = getAbout();
		if(!empty($about))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-striped">					
					<form enctype="multipart/form-data" method="POST" action="">
					<input type="hidden" name="oldid" value="<?php echo $about['id']; ?>" />
					<th  colspan="2" style="text-align: center;">
						<h4>English</h4>
					</th>
					<tr>
						<td><?php language('body'); ?></td>
						<td><textarea name="bodyen" rows="5" cols="5"><?php echo $about['bodyen']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('vision'); ?></td>
						<td><textarea name="visionen" rows="5" cols="5"><?php echo $about['visionen']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('mission'); ?></td>
						<td><textarea name="missionen" rows="5" cols="5"><?php echo $about['missionen']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('values'); ?></td>
						<td><textarea name="ourvaluesen" rows="5" cols="5"><?php echo $about['ourvaluesen']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('logostory'); ?></td>
						<td><textarea name="logostoryen" rows="5" cols="5"><?php echo $about['logostoryen']; ?></textarea></td>												
					</tr>

					<th  colspan="2" style="text-align: center;">
						<h4>عربي</h4>
					</th>
					<tr>
						<td><?php language('body'); ?></td>
						<td><textarea name="bodyar" rows="5" cols="5"><?php echo $about['bodyar']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('vision'); ?></td>
						<td><textarea name="visionar" rows="5" cols="5"><?php echo $about['visionar']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('mission'); ?></td>
						<td><textarea name="missionar" rows="5" cols="5"><?php echo $about['missionar']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('values'); ?></td>
						<td><textarea name="ourvaluesar" rows="5" cols="5"><?php echo $about['ourvaluesar']; ?></textarea></td>												
					</tr>
					<tr>
						<td><?php language('logostory'); ?></td>
						<td><textarea name="logostoryar" rows="5" cols="5"><?php echo $about['logostoryar']; ?></textarea></td>												
					</tr>
					
					<tr>
						<td></td>
						<td><input type="submit" name="saveabout" class="btn btn-info" /></td>
					</tr>
					</form>
				</table>
				</div>
			</div>
		</div>

		<?php } else language("noposts"); ?>
	</div>
</div>