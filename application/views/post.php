<section class="content-area blog-post post-single" id="content">

  <div class="row">
    <div class="container">


        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <article>
            <?php if($post):?>
            <h1 class="article-title"><?php echo $post->title;?> <span class="date"><?php echo $post->date;?></span></h1>

            <div class="section marginBottom-20">
              <img src="<?php echo base_url().'assets/images/blog/'.$post->image; ?>" alt="" class="thumb">
            </div>

            <div class="section marginBottom-20">
              <?php echo $post->content;?>
            </div>

            <?php endif; ?>
            </article>
			
			<div class="comments float-clear-wide">

			</div>
          </div>

        </div>



      </div>
  </div>
</section>
