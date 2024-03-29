<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="tagline">
                    <?php bloginfo("description"); ?>
                </h3>
                <h1 class="align-self-center display-1 text-center heading">
                    <a href="<?php echo site_url(); ?>" class="onek_bolesi"><?php bloginfo("name"); ?></a>
                </h1>
            </div>
            <div class="col-md-10 col-md-offset-1 text-center">
                <?php
                    wp_nav_menu(
                        array(
                            "theme_location" => "top-menu",
                            "menu_id" => "topmenucontainer",
                            "menu_class" => "list-inline text-center",
                        )
                    );
                ?>
            </div>
        </div>
    </div>
</div>