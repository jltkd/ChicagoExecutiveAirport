<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to Pro in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

function latestblogtitle($atts, $content=null){
    $getposttitle = get_posts(array('number' => 1));
    $getposttitle = $getposttitle[0];
    $returntitle = $getposttitle->post_title;
    return $returntitle;
}
add_shortcode('latestblogtitle', 'latestblogtitle');

function latestblogdate($atts, $content=null){
    $getpostdate = get_posts(array('number' => 1));
    $getpostdate = $getpostdate[0];
    $returndatemonth = mysql2date('m', $getpostdate->post_date);
    $returndateyear = mysql2date('y', $getpostdate->post_date);
    $returndatetotal = $returndatemonth . "." . $returndateyear;
    return $returndatetotal;
}
add_shortcode('latestblogdate', 'latestblogdate');