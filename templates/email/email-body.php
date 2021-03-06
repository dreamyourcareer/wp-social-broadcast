<?php
/**
 * WP Social Broadcast message 
 *
 * @author Karl Lillrud & Navnish Bhardwaj
 * @package	WP Social Braodcast
 * @version	1.0.0
 *
 */
if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php wsi_get_template('email/header.php', array( 'email_subject' => $email_subject ) ); ?>

<?php print apply_filters('the_content',$emailContent); ?>

<?php wsi_get_template('email/footer.php', array( 'email_footer' => $email_footer ) ); ?>