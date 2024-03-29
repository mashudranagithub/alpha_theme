    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <?php
                        wp_nav_menu(
                            array(
                                "theme_location" => "footer-menu",
                                "menu_id" => "footermenucontainer",
                                "menu_class" => "list-inline text-center",
                            )
                        );
                    ?>
                </div>

                <div class="col-md-12"><hr></div>
                
                <div class="col-md-6">
                    <?php if(is_active_sidebar("footer-left")){
                        dynamic_sidebar("footer-left");
                    } ?>
                </div>
                <div class="col-md-6 text-right">
                    <?php if(is_active_sidebar("footer-right")){
                        dynamic_sidebar("footer-right");
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>

</html>