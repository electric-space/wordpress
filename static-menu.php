<?php
                                
    // CHANGE MENU FOR HOMEPAGE FOR SCROLLING

    // get menu
    $locations = get_nav_menu_locations();
    $menu_id = $locations['primary'];
    $menus = wp_get_nav_menu_items( $menu_id );
    
    ?>
    
    <ul id="menu-main-navigation" class="nav">

        <?php 
            foreach( $menus as $menu )
            {   
                //  print_r($menu);
                
                if( $menu->object_id == 4  )
                {
                    echo '<li '.$class.'><a href="#home">'.$menu->title.'</a></li>';    
                }
                else
                {   
                    $link = explode( '/', $menu->url );
                    $link = $link[count($link)-2];
                    echo '<li><a href="#'.$link.'">'.$menu->title.'</a></li>';    
                }
            
            };?>
        
    </ul>