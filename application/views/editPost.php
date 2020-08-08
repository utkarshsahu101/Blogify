<div class="page-content">

	<div class="content">
		<div class="page-title">
			<h1>Edit Post</h1>
		</div>

			<?php if(isset($updateSuccess)):?>
				<div class="alert alert-success">
          <button class="close" data-dismiss="alert"></button>
          <?php echo $updateSuccess; ?>
				</div>
			<?php endif; ?>

			<?php if(isset($updateFail)):?>
				<div class="alert alert-error">
          <button class="close" data-dismiss="alert"></button>
          <?php echo $updateFail; ?>
				</div>
			<?php endif;?>

			<div class="col-lg-8">
				<div class="grid simple">
					<div class="grid-body no-border">
						<form action="<?php echo site_url('admin/editPost');?>" method="POST" enctype="multipart/form-data">

							<div class="row">
								<div class="form-group">
									<label>Post title:</label>
									<input type="text" name="title" id="" class="form-control" value="<?php echo $post->title;?>">
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<label>Date:</label>
									<input type="date" name="date" id="" class="form-control" value="<?php echo $post->date;?>">
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<label>Content:</label>
									<textarea name="content" id="text-editor" class="form-control" rows="10"><?php echo $post->content;?></textarea>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Image:</label>
										<img src="<?php echo base_url().'assets/images/blog/'.$post->image;?>" alt="">
									</div>
								</div>

								<div class="col-lg-6">
									<input type="file" name="postImage" id="postImage" class="form-control">
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<label>Category:</label>
									<select name="category" id="">
										<option value="<?php echo $post->category;?>" selected="selected"><?php echo $post->category;?></option>

										<?php foreach ($categories as $category):?>
											<option value="<?php echo $category->name;?>"><?php echo $category->name;?></option>;
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<div class="row">
								<div class="form-group">
									<input type="hidden" name="pid" value="<?php echo $post->id;?>">
									<input type="submit" name="" id="" class="btn btn-success" value="SAVE">
								</div>
							</div>

						</form>
					</div>
				</div>

			</div>

	</div>

</div>
