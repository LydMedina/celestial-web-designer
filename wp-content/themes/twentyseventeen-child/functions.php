<?php
/*
 Theme Name:   Twenty Seventeen Child
 Theme URI:    http://example.com/twenty-seventeen-child/
 Description:  Twenty Seventeen Child Theme
 Author:       Lydia Medina
 Author URI:   http://example.com
 Template:     twentyseventeen
 Version:      1.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Tags:         light, dark, two-columns, right-sidebar, responsive-layout, accessibility-ready
 Text Domain:  twentyseventeenchild
*/

// Enqueue scripts and styles
function twentyseventeen_child_scripts(){
	wp_enqueue_style( 'twentyseventeen-child-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twentyseventeen-style' ));
	wp_enqueue_style( 'twentyseventeen-child-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700|Righteous|Roboto+Slab:400,700' );
	
}
add_action( 'wp_enqueue_scripts', 'twentyseventeen_child_scripts' );
