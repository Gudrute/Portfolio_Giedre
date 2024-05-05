<section id="video" class=" section-padding section-connector">
  <div class="container padding"> 
    <div class="row">
      <div class="col-12">
        <div class="section-title text-left">
          <h4>Video production</h4>
          <br>
        </div>
      </div> 
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
  
      <div class="carousel-inner">

      <?php
        $videoLoop = new WP_Query(array(
           "post_type" => "video",
           "posts_per_page" => -1
            )); ?>

       <?php
         $video = get_field("video");
         $title = get_field("title");
        ?>

                    <?php if($videoLoop->have_posts()): ?>
                        <?php while($videoLoop->have_posts()): $videoLoop->the_post() ?>

        <div class="carousel-item active">
          
          <video src="<?php echo $video ?>" class="d-block w-100" alt="video">
          <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $title ?></h5>
          </div>
        </div>
        
        
                    <?php endwhile; ?>
                  <?php endif; ?>
                <?php wp_reset_postdata(); /*TODO*/ ?> 
        

      </div>
  
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  </section>













  
