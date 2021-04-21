<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-8 <?php if($lang_file == 'ar') echo 'col-md-pull-4'; ?>">
	<h4><label><?php language('contact'); ?></label></h4>
		<?php
		$contact = getContact();
		if(!empty($contact))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-striped">
					<form enctype="multipart/form-data" method="POST" action="">
						<input type="hidden" name="oldid" value="<?php echo $contact['id']; ?>" />
				
					<tr>
						<td><?php language('mobile'); ?></td>
						<td><input type="text" name="mobile" value="<?php echo $contact['mobile']; ?>" maxlength="50" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('phone'); ?></td>
						<td><input type="text" name="phone" value="<?php echo $contact['phone']; ?>" maxlength="50" class="form-control" /></td>
					</tr>					
					<tr>
						<td><?php language('sphone'); ?></td>
						<td><input type="text" name="sphone" value="<?php echo $contact['sphone']; ?>" maxlength="50" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('email'); ?></td>
						<td><input type="email" name="email" value="<?php echo $contact['email']; ?>" maxlength="100" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('en'); language(' '); language('address'); ?></td>
						<td><input type="text" name="addressen" value="<?php echo $contact['addressen']; ?>" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('ar'); language(' '); language('address'); ?></td>
						<td><input type="text" name="addressar" value="<?php echo $contact['addressar']; ?>" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('facebook'); ?></td>
						<td><input type="url" name="facebook" value="<?php echo $contact['facebook']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('twitter'); ?></td>
						<td><input type="url" name="twitter" value="<?php echo $contact['twitter']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('googleplus'); ?></td>
						<td><input type="url" name="googleplus" value="<?php echo $contact['googleplus']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('linkedin'); ?></td>
						<td><input type="url" name="linkedin" value="<?php echo $contact['linkedin']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('instagram'); ?></td>
						<td><input type="url" name="instagram" value="<?php echo $contact['instagram']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('pinterest'); ?></td>
						<td><input type="url" name="pinterest" value="<?php echo $contact['pinterest']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td><?php language('youtube'); ?></td>
						<td><input type="url" name="youtube" value="<?php echo $contact['youtube']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td><input type="submit" name="savecontact" class="btn btn-info" /></td>
						<td></td>
					</tr>
					</form>
				</table>
				</div>
			</div>
		</div>

		<?php } else language("noposts"); ?>
	</div>
</div>