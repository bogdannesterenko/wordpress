<?php get_header('main'); ?>

<?php 
	$design_cat = get_category(3);
	if($design_cat):
		$posts= get_posts( array(
			'numberposts' => 3,
			'category' => 3,
			));
 ?>

<section class="section-watch section-tabs" <?php echo blueavenges_get_background('section_img', $design_cat) ?>>
<?php endif; ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5">
        <h3><?php the_field('section_header', $design_cat) ?></h3>
          <h4><?php echo $design_cat->description ?></h4>

        <ul class="nav nav-pills" id="myTab" role="tablist">
	<?php 
		$data = [];
		$i = 0;
		foreach ($posts as $post):
		setup_postdata($post);
		$data[$i]['post_name'] = $post->post_name;
		$data[$i]['url'] = get_the_permalink();
		$data[$i]['content'] = get_the_content('');	
	 ?>
  <li class="nav-item">
    <a class="nav-link rounded-pill <?php if(!$i) echo 'active' ?>" id="<?= $post->post_name ?>-tab" data-toggle="tab" href="#<?= $post->post_name ?>" role="tab" aria-controls="webdesign" aria-selected="true"><?php the_title() ?></a>
  </li>
		<?php $i++; endforeach; ?>
  <!--<li class="nav-item">
    <a class="nav-link rounded-pill" id="mobileapp-tab" data-toggle="tab" href="#mobileapp" role="tab" aria-controls="mobileapp" aria-selected="false">Mobile app</a>
  </li>
  <li class="nav-item">
    <a class="nav-link rounded-pill" id="branding-tab" data-toggle="tab" href="#branding" role="tab" aria-controls="branding" aria-selected="false">Branding</a>
  </li> -->

</ul>
<div class="tab-content" id="myTabContent">
		<?php foreach($data as $k => $item): ?>
  <div class="tab-pane fade show <?php if(!$k) echo 'active' ?>" id="<?= $item['post_name'] ?>" role="tabpanel" aria-labelledby="<?= $item['post_name'] ?>-tab">
    <?= $item['content'] ?>

    <p><a href="<?= $item['url'] ?>" class="btn btn-pink btn-shadow"><?= __('Read more', 'blueavenges') ?></a></p>

  </div>

  <?php endforeach; ?>
</div>
</div>
      <div class="col-lg-6 text-center">
      <?php if(get_field('section_add_img', $design_cat)): ?>
        <img src="<?=  get_field('section_add_img', $design_cat) ?>" alt="">
    <?php endif; //if $design_cat ?>
      </div>
    </div>
  </div>
  <?php wp_reset_postdata(); unset($data, $posts); ?>
</section>

		<?php 
		$posts= get_posts( array(
			'numberposts' => 3,
			'category' => 4,
			));
		if($posts):
			
 			?>

        <section class="section-progress text-center">
    <?php endif; ?>
          <div class="container">
        <div class="row">
        <?php foreach($posts as $post): ?>
      <div class="col-md-4 progress-item">
			
        <?= $post->post_content;  ?>
      </div>
      <!-- /.col-md-4 progress-item -->
      <?php endforeach; ?>
    </div>
  </div>
  <?php unset($posts); ?>
</section>
<!-- /.section-progress -->
			<?php 
	$lets_cat = get_category(5);
	if($lets_cat):
 			?>

      <section class="section-lets text-center" <?php echo blueavenges_get_background('section_img', $lets_cat) ?>>
  				<?php endif; //$lets_cat ?>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3><?= $lets_cat->name ?></h3>
              <?php if(get_field('section_header', $lets_cat)): ?>
              <h4><?= get_field('section_header', $lets_cat) ?></h4>
          <?php endif; ?>
              <p><?= $lets_cat->description ?></p>
              <p><a href="<?= get_category_link(5) ?>" class="btn btn-pink btn-shadow"><?= __('Read more', 'blueavenges') ?></a></p>
            </div>
          </div>
        </div>
      </section>
      <!-- /.section-lets -->
	<?php 
	$graphic_cat = get_category(6);
	if($graphic_cat):
		$posts= get_posts( array(
			'numberposts' => 2,
			'category' => 6,
			));
 	?>
      <section class="section-design">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h3><?= $graphic_cat->name ?></h3>
              
              <h4><?=  get_field('section_header', $graphic_cat)?></h4>
          <?php endif; ?>
              <p><?= $graphic_cat->description ?></p>
                <div class="row">
          <?php foreach($posts as $post): setup_postdata($post);?>
                  <div class="col-md-6 mb-3">
                   <span><?php the_field('icon') ?></span>
                   <h2><?php the_title() ?></h2>
                 <?php the_content('') ?>
                  <p><a href="<?php the_permalink() ?>" class="btn btn-pink btn-shadow"><?= __('Read more', 'blueavenges') ?></a></p>
                  </div>
                  <!-- /.col-md-6 -->
          <?php endforeach; ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-6 -->
                  <div class="col-lg-6">

                  <?php  
                  if($video=get_field('section_video', $graphic_cat)):
                  $video = str_replace('watch?v=', 'embed/', $video);
                  ?>
             <div class="embed-responsive embed-responsive-16by9 mt-5">
                 <iframe id="videoPlayer" class="embed-responsive-item" src="https://www.youtube.com/embed/20Du2XHLPjI?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>            <!--<div id="videoPlayBtn"></div> кнопка запуска видео-->
                  <?php endif; ?>
                  </div>
                  <!-- /.col-lg-6 -->

          </div>
        </div>
        <?php wp_reset_postdata(); unset($data, $posts); ?>
      </section>
      <!-- /.section-design -->
		<?php 
	$work_cat = get_category(7);
	if($work_cat):
		$posts= get_posts( array(
			'numberposts' => 3,
			'category' => 7,
			));
 ?>
      <section class="section-work section-tabs">
  <?php endif; ?>
        <div class="container">
          <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
              <h4><?= $work_cat->name ?></h4>
              <p><?= $work_cat->description ?></p>
            </div>

                  <div class="col-md-12">
                <ul class="nav nav-pills justify-content-center" id="myTab-gallery" role="tablist">
                    <?php
                    $data = [];
                    $i = 0;
                    foreach($posts as $post):
                        setup_postdata($post);
                        $data[$i]['post_name'] = $post->post_name;
                        $data[$i]['url'] = get_the_permalink();
                        $data[$i]['content'] = get_the_content('');
                        ?>
                        <li class="nav-item">
                            <a class="nav-link rounded-pill <?php if(!$i) echo 'active' ?>" id="<?= $post->post_name ?>-tab" data-toggle="tab" href="#<?= $post->post_name ?>" role="tab" aria-controls="webdesign" aria-selected="true"><?php the_title() ?></a>
                        </li>
                        <?php $i++; endforeach; ?>
                </ul>
                <div class="tab-content" id="myTabContent2">
                    <?php foreach($data as $k => $item): ?>
                        <div class="tab-pane fade show <?php if(!$k) echo 'active' ?>" id="<?= $item['post_name'] ?>" role="tabpanel" aria-labelledby="<?= $item['post_name'] ?>-tab">
                            <?= $item['content'] ?>
                        </div>
                    <?php endforeach; ?>
               
                </div>

            </div>
            <!-- /.col-md-12 -->
        </div>
    </div>
    <?php wp_reset_postdata(); unset($data, $posts); ?>
</section>
<!-- /.section-work -->


      <section class="section-reviews">
        
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
            <div class="container">  
        <div class="row">
          <div class="col-sm-7">
            <div class="carousel-caption">
              <h3> Our happy Client</h3>
               <h4>Testimonials</h4>
                  <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Mr. John Doe</footer>
                    </blockquote>
        </div>
          </div>
          <!-- /.col-sm-7 -->
          <div class="col-sm-5 d-none d-sm-block">
             <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="">
          </div>
          <!-- /.col-sm-5 -->
        </div>
      </div>
      
    </div>
    <div class="carousel-item">
      <div class="container">  
        <div class="row">
          <div class="col-sm-7">
            <div class="carousel-caption">
              <h3> Our happy Client</h3>
               <h4>Testimonials</h4>
                  <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Mr. John</footer>
                    </blockquote>
        </div>
          </div>
          <!-- /.col-sm-7 -->
          <div class="col-sm-5 d-none d-sm-block">
            <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="">
          </div>
          <!-- /.col-sm-5 -->
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="container">  
        <div class="row">
          <div class="col-sm-7">
            <div class="carousel-caption">
              <h3> Our happy Client</h3>
               <h4>Testimonials</h4>
                  <blockquote class="blockquote">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Mr. Doe</footer>
                    </blockquote>
        </div>
          </div>
          <!-- /.col-sm-7 -->
          <div class="col-sm-5 d-none d-sm-block">
            <img src="<?php bloginfo('template_url') ?>/assets/img/client.png" alt="">
          </div>
          <!-- /.col-sm-5 -->
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </section>
      <!-- /.section-reviews -->

      <section class="section-form text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4>Need Help</h4>
              <h5>Don't Forget to Contact with Us</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, optio est sit perspiciatis quos temporibus veritatis dolorum ipsum voluptas obcaecati, velit laboriosam id consectetur, illum tempora, blanditiis delectus! Perferendis, distinctio.</p>

              <form>
  <div class="row">
    <div class="col-md-5">
      <input type="text" class="form-control" placeholder="Name">
    </div>
    <div class="col-md-5">
      <input type="email" class="form-control" placeholder="Email">
    </div>

      <div class="col-md-2">
        <button type="submit" class="btn btn-violet btn-shadow">Submit</button>
      </div>

  </div>
</form>
            </div>
          </div>
        </div>
      </section>
      <!-- /.section-form -->
      <?php get_footer(); ?>