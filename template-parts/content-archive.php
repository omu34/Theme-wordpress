<div class="container">
    <div class="post mb-5">
        <div class="media">
            <!-- Resizing the image through thumbnail in media -->
            <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" class="mr-3">
            <div class="media-body">
                <h3 class="title mb-1"><a href="<?php the_permalink(); ?>" class=""> <?php the_title(); ?></a></h3>
                <div class="meta mb-1">
                    <!-- Getting Realtime Date -->
                    <span class="date">
                        <?php the_date(); ?>
                    </span>
                    <!-- Getting the number of comments -->
                    <span class="comments"><a href="#" class="">
                            <?php comments_number(); ?>
                        </a></span>
                </div>
                <div class="intro">
                    <!-- Content of A story -->
                    <?php the_excerpt(); ?>
                </div>
                <!-- Link -->
                <a href="<?php the_permalink(); ?>" class="more-link">Read More &rarr;</a>
            </div><!-- Media body -->
        </div><!-- Media  -->
    </div>
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>