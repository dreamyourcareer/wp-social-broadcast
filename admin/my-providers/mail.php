<?php
/**
 * WP Social Broadcast message 
 *
 * @author Karl Lillrud & Navnish Bhardwaj
 * @package	WP Social Braodcast
 * @version	1.0.0
 *
 */
 ?>
 <script type="text/javascript">
 jQuery(document).ready(function($) { 
 	$('.collect_container h2').text($('#mail-title'));
 	
 	$('.mail-wrapper label').prependTo('#collect_emails');
 	
 	$('.collector').html($('.mail-wrapper').html());
 }); 
 </script>
<div style="display:none">
<h2 id="mail-title"><?php _e('Invite your friends',$this->WPB_PREFIX);?></h2>

<div class="mail-wrapper">
	<label for="subject"><?php _e('Enter your friends emails one by line',$this->WPB_PREFIX);?></label>
	

	<textarea name="friend" id="emails" style="height:120px;"></textarea>

</div>
				
</div>