<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * WP Social Broadcast message 
 *
 * @author Karl Lillrud & Navnish Bhardwaj
 * @package	WP Social Braodcast
 * @version	1.0.0
 *
 */
?>
<div class="service-filter-content ">
  <ul class="service-filters wsi-sidebar ">
<?php

	
	foreach ( $providers as $p => $p_name ):
		
		if( $options['enable_'.$p] == 'true' ) :
		?>
			<li id="<?php echo $p;?>-provider" data-li-origin="<?php echo $p;?>">
	             <a title="<?php echo $p_name;?>" href="#-service-<?php echo $p;?>" class="" data-provider="<?php echo $p;?>"><i class="wsiicon-<?php echo $p;?>"></i></a> 
	       </li> 
		
		<?php
		endif;
	endforeach;
?>		  
  </ul>
   <div class="wsi_success small"><?php echo sprintf( __('Thanks for inviting your %s friends. Please try other network if you wish.',$WPB_PREFIX),'<span id="wsi_provider"></span>');?></div>
</div>
