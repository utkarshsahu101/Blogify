<!-- Content -->
<section class="content-area blog" id="content">

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12 col-xs-12">
        <article>
          <h1 class="article-title">BLOG</h1>

          <div class="content-list-wrapper">
            <ul class="content-list">

              <?if($posts):?>
                <?php foreach ($posts as $post):?>
                  <li class="content-list-item col-sm-12">
                    <div class="col-sm-4 featured-img-container">
                      <a href="<?php echo site_url('blog/post/'.$post->id);?>"><img src="<?php echo base_url();?>assets/images/blog/<?php echo $post->image;?>" alt=""></a>
                    </div>

                    <div class="col-sm-7 content-item-info-container">
                      <h3 class="content-item-title"><a href="<?php echo site_url('blog/post/'.$post->id);?>"><?php echo $post->title;?></a></h3>

                      <div class="content-item-text">
                      <strong><span class="tarih"><?php echo $post->date;?></span></strong>
                      <p><?php echo $post->content;?></p></div>
                      <a href="<?php echo site_url('blog/post/'.$post->id);?>">
                      <button type="button" class="btn btn-solid no-border pull-right">More &nbsp; <span class="glyphicon glyphicon-search"></span></button>
                      </a>
                    </div>
                  </li>
                <?php endforeach; ?>
              <? endif; ?>

            </ul>
          </div>
          <div class="sayfalama"></div>

        </article>
      </div>

    </div>
  </div>
</section>
<!-- Content -->
