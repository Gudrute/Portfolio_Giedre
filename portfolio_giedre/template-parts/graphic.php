
<section id="graphic design" class=" section-padding section-connector">
<div class="container padding"> 
    <div class="row">

        <div class="col-12">
                <div class="section-title text-left">
                    <h4>Graphic design</h4>
                    <br>
                </div>
        </div> 

        <div>
            <div class="row g-2">
                <?php
                    $graphicLoop = new WP_Query(array(
                        "post_type" => "graphic",
                        "posts_per_page" => -1
                    )); ?>

                    <?php if($graphicLoop->have_posts()): ?>
                        <?php while($graphicLoop->have_posts()): $graphicLoop->the_post() ?>
                        

                            <?php
                                $image = get_field("image");
                                $description = get_field("description");
                            ?>

                            <div class="col-lg-4 col-sm-6">
                                <div class="project">
                                    <img src="<?php echo $image["url"] ?>" alt="img">
                                    <div 
                                        class="content">
                                        <a href="<?php echo $image["url"] ?>" style="color: white; align-content: center; padding: 10%;"><?php echo $description ?></a>
                                    </div>
                                </div>
                            </div>


                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); /*TODO*/ ?> 
            </div>
        </div>


    </div>
</div>
</section>



