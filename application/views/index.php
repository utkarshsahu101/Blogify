<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- İçerik Kısmı-->
<section class="content-area" id="content">
	<!--Home info-->
	<div class="row" id="home-info">
		<div class="container paddingLeftRight-0">

			<!-- Hakkımda-->
			<div class="col-lg-4 col-xs-12" id="hakkimda">
				<div class="home-info-box float-clear-wide">
					<div class="box-title text-center">ABOUT ME <span class="pull-left" id="profil"><img src="<?php echo base_url(); ?>assets/images/tamer_logo.jpg"></span><i class="fa fa-user pull-right" aria-hidden="true"></i></div>
					<ul>
						<li><strong>Name:</strong> Tamer Durgun</li>
						<li><strong>Age:</strong> <?php $birthDate = "06/02/1987"; $birthDate = explode("/", $birthDate); $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y") - $birthDate[2]) - 1) : (date("Y") - $birthDate[2]));echo $age;?></li>
						<li><strong>Tall:</strong> 185cm</li>
						<li><strong>Weight:</strong> 115kg</li>
						<li><strong>From:</strong> Turkey</li>
						<li><strong>Title:</strong> Full-Stack Developer</li>
						<li><strong>Experience:</strong>
								<?php

								$start = new DateTime('2013-12-04');
								$now = new DateTime(date("Y-m-d",strtotime("now")));
								$passed_time = $now->diff($start);

								echo $passed_time->format('%y years');

								?>
						</li>
						<li><strong>Grade:</strong> Bechelor's</li>
					</ul>
				</div>
			</div>
			<!-- Hakkımda-->

			<!-- Hizmetler-->
			<div class="col-lg-8 col-xs-12" id="hizmetler">
				<div class="home-info-box float-clear-wide">
					<div class="box-title text-center">SKILLS <i class="fa fa-code pull-right" aria-hidden="true"></i></div>
					<ul>
						<li><strong>A. Front-end Development</strong></li>
						<li class="paddingLeft-15">- HTML5 & CSS3<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Bootstrap<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Sass / Less<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- javaScript<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- ES6<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- TypeScript<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Design Patterns<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- jQuery<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Angular<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Reactjs<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Gruntjs / Gulpjs<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Webpack<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></li>
						<li><strong> B. Back-end Development</strong></li>
						<li class="paddingLeft-15">- Php<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Php Design Patterns<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- OOP<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- MySQL<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- CodeIgniter FW<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Zend FW<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- Node.js<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li><strong> C. Mobile App. Development</strong></li>
						<li class="paddingLeft-15">- Ionic FW<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
						<li class="paddingLeft-15">- React Native<span class="skill-point-container"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span></li>
					</ul>
				</div>
			</div>
			<!-- Hizmetler-->

		</div>
	</div>
	<!--Home info-->

	<!-- Home Blog-->
	<div class="section" id="home-blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-xs-12">
					<div class="home-info-box float-clear-wide">
						<a href="<?php echo site_url('blog');?>" class="box-title text-left">BLOG<i class="fa fa-pencil pull-right" aria-hidden="true"></i></a>

						<?if($posts):?>
              <?php foreach ($posts as $post):?>
						<div class="post">
              <div class="post-thumb">
                <a href="<?php echo site_url('blog/post/'.$post->id);?>"><img src="<?php echo base_url();?>assets/images/blog/<?php echo $post->resim;?>" alt=""></a>
              </div>

              <div class="post-text">
                <div class="post-title"><a href="<?php echo site_url('blog/post/'.$post->id);?>"><?php echo $post->baslik;?></a></div>

                <div>
                  <?php echo $post->icerik;?>
								</div>

              </div><a href="<?php echo site_url('blog/post/'.$post->id);?>" class="read-more pull-right">Devamı<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>

							<?php endforeach; ?>
						<? endif; ?>

					</div>
				</div>
				<div class="col-lg-4 col-xs-12">
					<div class="home-info-box float-clear-wide">
						<div class="box-title text-left">TWITTER<i class="fa fa-twitter-square pull-right"></i></div>

						<div class="tweet-container"> 
							<a class="twitter-timeline" data-lang="tr" href="https://twitter.com/tmrdurgun?ref_src=twsrc%5Etfw">Tweets by tmrdurgun</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Home Blog-->
</section>
<!-- İçerik Kısmı Son-->