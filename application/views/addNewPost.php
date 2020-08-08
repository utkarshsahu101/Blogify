<div class="page-content">

	<div class="content">
		<div class="page-title">
			<h1>New Post</h1>
		</div>

			<?php if(isset($successMessage)):?>
				<div class="alert alert-success">
          <button class="close" data-dismiss="alert"></button>
          <?php echo $successMessage; ?>
				</div>
			<?php endif; ?>

			<?php if(isset($errorMessage)):?>
				<div class="alert alert-error">
          <button class="close" data-dismiss="alert"></button>
          <?php echo $errorMessage; ?>
				</div>
			<?php endif;?>

			<div class="col-lg-8">
				<div class="grid simple">
					<div class="grid-body no-border">
						<form action="<?php echo site_url('admin/addNewPost');?>" method="POST" enctype="multipart/form-data">

							<div class="row">
								<div class="form-group">
									<label>Title:</label>
									<input type="text" name="title" id="" class="form-control">
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<label>Date:</label>
									<input type="date" name="date" id="" class="form-control">
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<label>Content:</label>
									<textarea name="content" id="text-editor" class="form-control" rows="10"></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Image:</label>
										<input type="file" name="postImage" id="postImage" class="form-control">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<label>Category:</label>
									<select name="category">
										<?php foreach ($categories as $category):?>
											<option value="<?php echo $category->name;?>"><?php echo $category->name;?></option>;
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<input type="submit" name="" id="" class="btn btn-success" value="SAVE">
								</div>
							</div>

						</form>
					</div>
				</div>

			</div>

	</div>

</div>
