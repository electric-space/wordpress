<div class="row stockists-row">
    
        <h2>Stockists</h2>
        <div class="col-1"></div>
        <ul class="stockist-list">
            <?php
                if( $stockist = get_field('stockist') ):
                
                    foreach( $stockist as $stockist )
                    {
                        echo '<li class="col-2">';
                        echo '<a href="'.$stockist['link'].'" target="_blank"><img src="'.$stockist['logo']['sizes']['stockists'].'" alt="" /></a>';
                        echo'</li>';
                        
                        
                        //print_r( $stockist );
                        
                    };
                
                endif;?>
                
        </ul>
    
</div>