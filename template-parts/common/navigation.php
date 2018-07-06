<a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                     <?php 
                        $philosopy_menu=wp_nav_menu(array(
                            "theme_location"=>"topmenu",
                            "menu_class"=>"header__nav",
                            "echo"=>false,

                        ));
                        $philosopy_menu= str_replace("menu-item-has-children","menu-item-has-children has-children",$philosopy_menu);
                        echo $philosopy_menu;
                     ?>
                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav>