<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php bloginfo("title"); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="tagline">
                        <?php bloginfo("description"); ?>
                    </h3>
                    <h1 class="align-self-center display-1 text-center heading">
                        <?php bloginfo("name"); ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="posts">
        <?php
        while (have_posts()) {
            the_post();
            ?>
            <div class="post" <?php post_class(); ?>>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                                <strong><?php the_author(); ?></strong><br />
                                <?php echo get_the_date(); ?>
                            </p>
                            <?php the_tags('<ul class="list-unstyled"><li>', '</li><li>', '</li></ul>') ?>
                        </div>
                        <div class="col-md-8">
                            <p>
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large', array("class" => "img-fluid"));
                                }
                                ?>
                            </p>
                            <?php the_excerpt(); ?>
                        </div>
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
                        "screen_reader_text"=>" ",
                    ));
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; LWHH - All Rights Reserved
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>

</html>