<?php get_header(); ?>

<body <?php body_class(); ?>>
<?php get_template_part('hero'); ?>
    <div class="posts">
        <?php
        while (have_posts()) {
            the_post();
            ?>
            <div class="post" <?php post_class(); ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 text-center">
                            <h2 class="post-title">
                                <?php the_title(); ?>
                            </h2>
                            <p>
                                <strong><?php the_author(); ?></strong><br />
                                <?php echo get_the_date(); ?>
                            </p>
                            <?php the_tags('<ul class="list-unstyled"><li>', '</li><li>', '</li></ul>') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <p>
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large', array("class" => "img-fluid"));
                                }
                                ?>
                            </p>
                            <?php
                            the_content();
                            ?>
                        </div>

                        <?php if(comments_open()): ?>
                        <div class="col-md-12 col-md-offset-1">
                            <?php comments_template(); ?>
                        </div>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        <?php
    }
    ?>
    </div>

    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <?php
                the_posts_pagination(array(
                    "screen_reader_text" => " ",
                ));
                ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>