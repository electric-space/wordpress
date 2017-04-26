<?php 
    
    if( $slider = get_field('slide', 7) ): 
    
    
    
    ;?>

    	
        <ul class="uk-slideshow uk-slideshow-fullscreen home-slides"  data-uk-slideshow="{kenburns:true, autoplay:true}">
	    <?php 
    	    foreach( $slider as $slide )
    	    {
                echo '<li class="slide">
                        <img src="'.$slide['image']['url'].'" alt="'.$slide['image']['alt'].'" />';
                        
                    if( $slide['caption'] )
                    {
                        echo '<div class="slideshow-caption uk-overlay-panel uk-flex uk-flex-bottom uk-text-center">';
                        echo '<div class="caption-copy uk-width-medium-6-10 uk-push-2-10 ">'.$slide['caption'].'</div>';
                        echo '</div>';
                    };
                    
                echo '</li>';
                
            };?>
            
        </ul>
    	    	
    	


<?php endif ;?>