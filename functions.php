<?php if (!defined('ABSPATH')) exit;

$cg_functions = array(
  'lib/setup.php',
  'lib/scripts.php',
  'lib/blocks.php',
  'lib/images.php',
  'lib/nav.php',
  'lib/misc.php',
);

foreach ($cg_functions as $function) {
	if( !$filepath = locate_template( $function ) ) {
		trigger_error( sprintf( 'Error location %s for inclusion', $function ), E_USER_ERROR );
	}
	require_once $filepath;
}

unset( $function, $filepath );
