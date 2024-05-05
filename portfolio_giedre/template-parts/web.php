

<section id="websites" class="section-connector" >
  <div class="d-flex align-items-center min-vh-100 bg-light align-items-center">
  <div class="container" style="margin-top: 5%;" >
    <h4>Web design</h4>
    <br>
    <div class="row" >
    <?php
      $webLoop = new WP_Query(array(
        "post_type" => "web",
        "posts_per_page" => -1
      ));
      ?>

      <?php if($webLoop->have_posts()): ?>
          <?php while($webLoop->have_posts()): $webLoop->the_post() ?>

<?php
    $image = get_field("image");
    $title = get_field("title");
    $category = get_field("category");
    $description = get_field("description");
    $tag = get_field("tag");
    $tag2 = get_field("tag2");
    $tag3 = get_field("tag3");
?>

      <!--video-->
      <div class="col col-12 col-md-6 item top-box-3 p-4">
        
        <picture>
          <img src="<?php echo $image["url"] ?>" class="d-block w-100" alt="<?php echo $image[/*TODO*/"alt"] ?>">
        </picture>
      </div>  
      
      <!--description-->
      <div class="col col-12 col-md-6 item top-box-2 p-4">
            <h5><?php echo $title ?></h5>
            <p id="text-line-left-black" > <?php echo $category ?></p>   <!--line ????-->
            <br>
            <p><?php echo $description ?> </p>
              <br>
        <div class="d-flex  top-box-3"> <!--row????-->
                <p class="p-4"><?php echo $tag ?></p>
                <p class="p-4"><?php echo $tag2 ?></p>
                <p class="p-4"><?php echo $tag3 ?></p>
        </div>
        </div>
        <br>
    <hr class="hr" />
    <br>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); /*TODO*/ ?> 


    </div>
    </section>
    