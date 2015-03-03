<?php
// bootstrap includes.
foreach ( dirname( __FILE__ ) . '/lib/*.php' ) as $file )
{
	include $file;
}