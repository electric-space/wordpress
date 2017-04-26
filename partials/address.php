<p class="_uk-vertical-align-middle ">
    <?php
    
    if( $open_hours = get_field('open_hours', 'option') ) echo '<span class="yellow_green">Mon - Fri:</span> ' . $open_hours . '<br />';
    

    if( $phone = get_field('phone_number', 'option') ) echo '<span class="yellow_green">Tel:</span> '.  $phone .'<br />';
    
    if( $email = get_field('email', 'option') ) echo '<span class="yellow_green">Email: </span><a href="mailto:'.$email.'">'.$email.'</a>';

    ;?>
    
</p>