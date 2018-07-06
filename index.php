<?php get_header();?>


       <?php get_template_part("template-parts/blog-home/featured")?>

    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class="s-content">
        
        <div class="row masonry-wrap">
            <div class="masonry">

                <div class="grid-sizer"></div>

                <?php 
                    while(have_posts()){
                        the_post();
                        get_template_part("template-parts/post-formats/post",get_post_format());
                    }
                
                ?>

            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->
        <div class="row">
            <div class="col-full">
                <nav class="pgn">
                    <?php 
                        philosopy_pagination();
                    ?>
                </nav>
            </div>
        </div>

    </section> <!-- s-content -->


    <?php get_footer();?>



    