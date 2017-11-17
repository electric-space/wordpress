<?php 


//email
function email_func(){
	
	$email = '<a href="mailto:office@holbrookhigh.suffolk.sch.uk?subject=Mail%20from%20website.">office@holbrookhigh.suffolk.sch.uk</a>';
	
	return $email;
}
add_shortcode( 'email', 'email_func' );




// column shortcodes
function column_func( $atts, $content = null ) {
    
    $content = preg_replace('#^<\/p>|<p>$#', '', $content);
    
	extract( shortcode_atts( array(
		'align' => '',
		'width' => ''
	), $atts ) );

	return '<div class="page-column '.$align.'" style="width:'.$width.'px">'.
			do_shortcode($content).
			'</div>';
}
add_shortcode( 'column', 'column_func' );




// social
function social_func($atts, $content = null ){

	extract( shortcode_atts( array(
		'size' => ''
	), $atts ) );
	
	//set title
	// send the post->ID as a function call on index page
	
	if($atts){
    	$title = get_bloginfo('site') .' - '. get_the_title($atts);
	}else{
    	$title = get_bloginfo('site') .' - '. get_the_title();
	}
	
	if($size == 'large'){

	    return '
	        <div class="social">
	        <span class="st_twitter_large" st_title="'.$title.'" displayText="Tweet"></span>
	        <span class="st_facebook_large" st_title="'.$title.'" displayText="Share"></span>
	        <span class="st_google_large" st_title="'.$title.'" displayText="Google"></span>
	        <span class="st_linkedin_large"  st_title="'.$title.'" displayText="LinkedIn"></span>
	        <span class="st_email_large" st_title="'.$title.'"  displayText="Email"></span>
	        <span class="st_delicious_large" st_title="'.$title.'"  displayText="Delicious"></span>
	        <span class="st_sharethis_large"  st_title="'.$title.'" displayText="ShareThis"></span>
	        </div>';
	}else{
		
		return '
	        <div class="social">
	        <span class="st_twitter" st_title="'.$title.'"></span>
	        <span class="st_facebook" st_title="'.$title.'"></span>
	        <span class="st_google" st_title="'.$title.'"></span>
	        <span class="st_linkedin"  st_title="'.$title.'"></span>
	        <span class="st_email" st_title="'.$title.'"></span>
	        <span class="st_delicious" st_title="'.$title.'"></span>
	        <span class="st_sharethis"  st_title="'.$title.'"></span>
	        </div>';	
		
	}


}

add_shortcode('social', 'social_func');







function button_func($atts){
	
	extract( shortcode_atts( array(
		'text' => '',
		'page' => '',
		'size' => '',
	), $atts ) );

	return '<a href="'.get_bloginfo('url').'/'.$page.'/" class="button '.$size.'">'.$text.'</a>';
	
}

add_shortcode( 'button', 'button_func');



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