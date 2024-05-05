<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>






<!--hero-->

<?php
   $h1 = get_field("h1");
?>
<section id="home" class="d-flex align-items-center min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <h1 class="dispay-4 mt-5"><?php echo $h1 ?></h1> <!--responsive ??????-->
            
          </div>
        </div>
      </div>
    </section>

    <!--about-->

    <?php
   $about_title = get_field("about_title");
   $text_about = get_field("text_about");
   $cv = get_field("cv");
   $video_cv = get_field("video_cv");
   $linkedin = get_field("linkedin");
   $behance = get_field("behance");
    ?>
    <section id="about" class="d-flex align-items-center min-vh-100" >
      <div class="container">
        <h2 style="text-align: right;"><?php echo $about_title ?></h2> 
      
          <div class="row">
            <div class="col col-12 col-md-6 item top-box-2 mt-5 px-4" id="side-border-right">
            
              <p><?php echo $text_about?></p>
            </div>
            
                

            <div class="col col-12 col-md-6 item top-box-3 text-align-right align-self-end p-4">
              <a href="<?php echo $cv?>" class="me-4 text-reset">
                <button type="button" class="btn btn-link">CV</button> 
              </a>
              <a href="<?php echo $video_cv?>" class="me-4 text-reset">
                <button type="button" class="btn btn-link">Video CV</button> 
              </a>
              <a href="<?php echo $linkedin?>" class="me-4 text-reset">
                <button type="button" class="btn btn-link">LinkedIn</button> 
              </a>
              <a href="<?php echo $behance?>" class="me-4 text-reset">
                <button type="button" class="btn btn-link">Behance</button> 
              </a>
            
            </div>
          </div>
      </div>
    </section>





    

       <!--what do I do-->
       <section id="work" class="d-flex align-items-center min-vh-100 bg-dark align-items-center" style="padding: 10%;">
        <div class="container">
        

                    
                    <?php
                    $question = get_field("question");
                    $doing = get_field("doing");
                    $what = get_field("what");
                    $picture = get_field("picture");
                    $tag1 = get_field("tag1");
                    $tag2 = get_field("tag2");
                    $tag3 = get_field("tag3");
                    ?>
        
          <div class="row">
            <div class="col col-12 col-md-6 item top-box-2">
              <p style="color: white;"><?php echo $question ?></p>
              <br>
              <h2 style="color: white; "><?php echo $doing ?></h2>
              <h3 id="text-line-left" style="font-style: italic;">
              <?php echo $what ?></h3>
                <br>
                <BR></BR>

                <div class="d-flex  top-box-3"> 
                  <p class="p-4" style="color: white;"># <?php echo $tag1 ?></p>
                  <P class="p-4" style="color: white;"># <?php echo $tag2 ?></P>
                  <P class="p-4" style="color: white;"># <?php echo $tag3 ?></P>
                  
                </div>
        
               
            </div>
            <div class="col col-12 col-md-6 item top-box-3">
              <picture>
                <img src="<?php echo $picture?>" class="d-block w-100" alt="minime">
                </picture>
            </div>
          </div>
             

        </div>
       </section>




       <?php get_template_part("template-parts/web") ?>
       <?php get_template_part("template-parts/graphic") ?>
      









       <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>