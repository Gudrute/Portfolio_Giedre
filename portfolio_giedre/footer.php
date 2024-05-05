<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

<?php
                    $footer_question = get_field("footer_question");
                    $invitation = get_field("invitation");
                    $btn1 = get_field("btn1");
                    $btn2 = get_field("btn2");
                    $btn3 = get_field("btn3");
                    $copyright = get_field("copyright");
                    ?>

<section id="contact" class="section-connector">
  <div class="d-flex align-items-center p-4 bg-dark align-items-center border-bottom">
    <div class="container-fluid">
      <div class="row">

        <div class="col col-12 col-md-6 item top-box-3">
          <br>
          <br>
          <br>
          <p style="color: white;"><?php echo $footer_question ?></p>
          <h2 style="color: white;"><?php echo $invitation ?></h2>
        </div>  
        
        <div>
          <a href="<?php echo $btn1 ?>" class="me-4 text-reset">
            <i class="fa-brands fa-linkedin-in" style="color: white;"></i>
          </a>
          <a href="<?php echo $btn2 ?>" class="me-4 text-reset">
            <i class="fa-brands fa-behance" style="color: white;"></i>
          </a>
          <a href="mailto:glimantaite@gmail.com" class="me-4 text-reset">
            <i class="fa-regular fa-envelope" style="color: white;"></i>
          </a>
        </div>

      </div>
    </div>
  </div>

  <div class="text-center p-4" style="background-color: #212529; ">
    <p style="color: white; font-size: 14px;"><?php echo $copyright ?></p>
  </div>
  
</section>


<?php endwhile ?>
    <?php endif ?>

       

    <?php wp_footer() ?>
</body>
</html>
