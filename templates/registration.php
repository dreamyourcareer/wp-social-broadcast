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
<div class="message" style="margin:10px 0;<?php if($is_bp == 'yes') echo 'background:#FFE; font-size:18px;border: 1px solid #DD6;padding:20px';?> ">
    <p><?php   printf( __( 'Welcome! You\'ve been invited %s to join the site. Please fill out the information below to create your account.', $WPB_PREFIX ), $inviter_text );?></p>
</div>