<?php
### Variables Variables Variables
$base_name = plugin_basename( 'quick-accelerator/quick-accelerator-options.php' );
$base_page = 'admin.php?page='.$base_name;
?>

<?php if( !empty( $text ) ) { echo '<div id="message" class="updated fade"><p>' . $text . '</p></div>'; } ?>
<form method="post" action="<?php echo admin_url( 'admin.php?page=' . plugin_basename( __FILE__ ) ); ?>">
<?php wp_nonce_field( 'quick-accelerator_options' ); ?>
<div class="wrap">
	<h2><?php _e( 'Quick Accelerator Options', 'quick-accelerator' ); ?></h2>
	<p><?php _e( 'Coming soon.', 'quick-accelerator' ); ?></p>
</div>
</form>
