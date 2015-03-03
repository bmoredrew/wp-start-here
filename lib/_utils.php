<?php
/*
	Use this file for debugging code, includes wp_dump() by
	default which is a Sizeable authored version of var_dump
	(which is just a prettier version).
*/
if ( !function_exists( 'wp_dump' ) ) :

function wp_dump()
{
	foreach( func_get_args() as $arg )
	{
		echo '<pre style="margin:1em;padding:1em;border:1px solid #e9e9e9;background:#fff;color:#333;font:12px Monaco,Courier,monospace;">';
		var_dump( $arg );
		echo '</pre>';
	}
}

endif;

//Show all registered actions
if ( !function_exists( 'show_me_actions' ) ) : 

function show_me_actions ( $wp_filter )
{
	//global $wp_filter;
	//$hook_name = 'admin_bar_menu';
	//var_dump( $wp_filter[$hook_name] );
	print_r( $wp_filter );
}

endif;

//szbl_setup_post
if ( !function_exists( 'szbl_setup_post' ) ) :

function szbl_setup_post( $post )
{
	global $szbl_org_post;

	$szbl_org_post = $GLOBALS['post'];

	$GLOBALS['post'] = $post;
	setup_postdata( $post );
}

endif;

//szbl_reset_post
if ( !function_exists( 'szbl_reset_post' ) ) :

function szbl_reset_post()
{
	global $szbl_org_post;

	szbl_setup_post( $szbl_org_post );
}

endif;