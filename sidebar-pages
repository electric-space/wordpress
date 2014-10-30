<div class="widget pagelist">

    <h4>Page Listings for <?php the_title() ;?></h4>
    
    <ul class="pages-menu">
    
    <?php
    
        if( is_front_page() )
        {
            wp_list_pages("title_li=&depth=1&exclude=5859,8495,3220,5866,1335,5,7");    
        }
        else
        {
            // check if current page has children
            $children = get_pages('child_of='.$post->ID);
            
            if( count( $children ) != 0)
            {
                $children = wp_list_pages("title_li=&child_of=".$post->ID."&exclude=117,902");
            }
            elseif( $post->post_parent > 0)
            {
                $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&exclude=117,902");  
            }
            else
            { 
                $children = wp_list_pages("title_li=&depth=1&exclude=5859,8495,3220,5866,1335,5,7");
            }
            
            echo $children;
    
        };?>
    
    <ul>

</div>
