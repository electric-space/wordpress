<?php 

    add_filter( 'the_content', 'paragraph_fix' );
    /**
     * Filters the content to remove any extra paragraph or break tags
     * caused by shortcodes.
     *
     * @since 1.0.0
     *
     * @param string $content  String of HTML content.
     * @return string $content Amended string of HTML content.
     */
    function paragraph_fix( $content ) {
     
        $array = array(
            '<p>['    => '[',
            ']</p>'   => ']',
            ']<br />' => ']'
        );
        return strtr( $content, $array );
     
    }
    
 ;?>