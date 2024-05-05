       <!--what do I do-->
       <section id="work" class="d-flex align-items-center min-vh-100 bg-dark align-items-center" style="padding: 10%;">
        <div class="container">

                <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post() ?>

                    
                    <?php
                    $question = get_field("question");
                    $doing = get_field("doing");
                    $what = get_field("what");
                    $image = get_field("image");
                    $pages = get_field("pages");
                    $availability = get_field("availability");
                    $description = get_field("description");
                    ?>
        
                        <div class="row">
                            <div class="col col-12 col-md-6 item top-box-2">
                            <p style="color: white;"><?php echo $question ?></p>
                            <br>
                            <h2 style="color: white; ">designing</h2>
                            <h3 id="text-line-left" style="font-style: italic;">
                                experiences</h3>
                                <br>
                                <BR></BR>

                                <div class="d-flex  top-box-3"> 
                                <p class="p-4" style="color: white;"># UI/UX DESIGN</p>
                                <P class="p-4" style="color: white;"># BRANDING</P>
                                <P class="p-4" style="color: white;"># GRAPHIC DESIGN</P>
                                
                                </div>
                        
                            
                            </div>
                            <div class="col col-12 col-md-6 item top-box-3">
                            <picture>
                                <img src="<?php echo get_template_directory_uri() ?>/images/minime.svg" class="d-block w-100" alt="minime">
                                </picture>
                            </div>
                        </div>

                        <?php endwhile ?>
                     <?php endif ?>

        </div>
       </section>