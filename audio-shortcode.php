<!DOCTYPE html>

<html lang="en" dir="ltr" class="no-js">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Audio shortcode </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	</style>
</head>

<body>


<?php 

    
    $path = 'http://designerinput.co.uk/custom-feed?id=1092';
    $page = file_get_contents($path);
    
    get_audio($page);

    
    function get_audio($page)
    {
        $start_tag = '[audio';
        $end_tag = '[/audio]';
        
        $offset = 0;
        $c = 0;
        
        while($offset = strpos($page, $start_tag, $offset + 1))
        {
        	$c++;
        	$e = strpos($page, $end_tag, $offset);
        	$e = $e + strlen($end_tag);
        	$code = substr($page, $offset, $e-$offset);
        	
        	// parse code
        	$arr = explode('"', $code);
        	
        	$url = $arr[1];
        	
        	
        	$audio = '<audio controls>
        	        <source src="'.$url.'" type="audio/mpeg">
                    Your browser does not support the audio tag.
                </audio>';
            
            $page = str_replace($code, $audio, $page);
        	
            $e = 0;
        }
        
        
        echo $page;
        
        
    }    
    

	
    

    
    
    
    
    
    






 ;?>




</body>
</html>