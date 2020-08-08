<div class="page-content">

	<div class="content">
		<div class="page-title">
			<h1>Posts</h1>
		</div>

		<ul>
			<?php foreach ($posts as $post) {?>

				 <li>
					 <?php echo $post->title;?> <a href="<?php echo base_url();?>admin/editPost/<?php echo $post->id;?>">Edit</a> /
					 <a href="<?php echo base_url();?>admin/deletePost/<?php echo $post->id;?>">Delete</a>
				 </li>

			<?php }?>
		</ul>
	</div>

</div>
<!-- END CHAT -->
<!-- END CONTAINER -->
