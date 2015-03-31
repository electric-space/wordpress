<?php 
    
    // column shortcodes
    function column_func( $atts, $content = null ) {
        
        $content = preg_replace('#^<\/p>|<p>$#', '', $content);
        

        
    	extract( shortcode_atts( array(
    		'align'   => '',
    		'width'   => '',
    		'span'    => '',
    		'padding' => '',
    		'color'   => '',
    		'class'   => '',
    		'margin'  => ''
    	), $atts ) );
    	
    	$style = 'style="';
    	
    	if( $align )    $style .= 'float:'.$align.';';
    	if( $width )    $style .= 'width:'.$width.'px;';
    	if( $padding )  $style .= 'padding:'.$padding.';';
    	
    	if( $color )    $style .= 'color:'.$color.';';
    	if( $margin )    $style .= 'margin:'.$margin.';';
    	
    	$style .= '"';
    
    	return '<div class="col-'.$span.' '.$class.'" '.$style.'>'.
    			do_shortcode($content).
    			'</div>';
    }
    add_shortcode( 'column', 'column_func' );
    
    
    
    // add map

function map(){

	
    
    $map = '
    	
    	<script type="text/javascript">

	    	var lat = 51.988576;
			var lng = 1.156503;
    	
    	    $(document).ready(function() {
    		    initialize();
    	    });
    	</script>
    	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>';

    
    $map .= '
    
           
    <script type="text/javascript">
      function initialize() {
        
        var latlng =  new google.maps.LatLng(lat, lng);
        
        var mapOptions = {
          center: latlng,
          zoom: 16,
          disableDefaultUI: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        
        var map = new google.maps.Map( document.getElementById("map_canvas"), mapOptions );
        
        
        var marker = new google.maps.Marker({
              position: latlng,
              map: map,
              title:"Holbrook Academy"
          });
        
        
      }
    </script>';
    
    
    echo $map;
    
    
}
    
    
    
    
    
    
    
    
    
 ;?>