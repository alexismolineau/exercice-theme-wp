<main id="primary" class="content-area" role="main">
    <?php

    if (have_posts()){
        ?>
        <?php
        while(have_posts()){
            the_post();
            ?>
            <article class="post hentry">
                <header class="entry-header">
                    <h2 class="entry-title">
                        <?php if(is_archive() || is_home()){
                            echo '<a title="<?php the_title();?>" href="<?php the_permalink(); ?>" rel="bookmark">';
                        } ?>
                        <?php the_title();?>
                        <?php if(is_archive() || is_home()){
                            echo '</a>';
                        }?>
                    </h2>
                    <?php if(!is_page()){ ?>
                    <p class="entry-meta">
                                <span class="byline">Posted in
                                    <a href="<?php echo get_category_link(get_the_category()[0]->cat_ID); ?>"><?php echo get_the_category()[0]->cat_name; ?></a>
                                    , on
                                    <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')); ?>">
                                        <?php echo get_the_date() ?>
                                    </a>
                                </span>
                    </p><!-- .entry-meta -->
                    <?php }?>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php } ?>
        <?php if(is_archive() || is_home()){ ?>
        <nav class="navigation posts-navigation" role="navigation">
            <h2 class="screen-reader-text">Posts navigation</h2>
            <div class="nav-links">
                <div class="nav-previous">
                    <?php previous_posts_link('<span data-icon="ei-arrow-left"></span><span>Older post</span>') ?>
                </div>
                <div class="nav-next">
                    <?php next_posts_link('<span>Newer post</span><span data-icon="ei-arrow-right"></span>') ?>
                </div>
            </div>
        </nav>
        <?php }?>

        <?php
    }

    else {
        ?>
        <p>Aucun contenu n'a été trouvé</p>
        <?php

    }
    ?>
</main>