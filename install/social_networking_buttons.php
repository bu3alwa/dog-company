<?php
/**
* social_networking_buttons [English]
*
* @author _Vinny_ ( http://www.suportephpbb.com.br )
* @package language
* @version $Id$
* @copyright (c) _Vinny_, DoYouSpeakWak, Jaymie1989, KellyBean 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// install
$lang = array_merge($lang, array(
	'INSTALL_SOCIAL_NETWORKING_SITE_BUTTONS'				=> 'Install Social Networking Site Buttons',
	'INSTALL_SOCIAL_NETWORKING_SITE_BUTTONS_CONFIRM'		=> 'Are you ready to install the Social Networking Site Buttons Mod?',
	'SOCIAL_NETWORKING_SITE_BUTTONS'						=> 'Social Networking Site Buttons',
	'SOCIAL_NETWORKING_SITE_BUTTONS_EXPLAIN'				=> 'Install Social Networking Site Buttons database changes with UMIL auto method.',
	'UNINSTALL_SOCIAL_NETWORKING_SITE_BUTTONS'				=> 'Uninstall Social Networking Site Buttons',
	'UNINSTALL_SOCIAL_NETWORKING_SITE_BUTTONS_CONFIRM'		=> 'Are you ready to uninstall the Social Networking Site Buttons? All settings and data saved by this mod will be removed!',
	'UPDATE_SOCIAL_NETWORKING_SITE_BUTTONS'					=> 'Update Social Networking Site Buttons Mod',
	'UPDATE_SOCIAL_NETWORKING_SITE_BUTTONS_CONFIRM'			=> 'Are you ready to update the Social Networking Site Buttons Mod?',
));

// acp_styles - language/*/acp/styles.php
$lang = array_merge($lang, array(
	'IMG_ICON_CONTACT_STEAM'		=> 'Steam',
	'IMG_ICON_CONTACT_YOUTUBE'		=> 'Youtube',
	'IMG_ICON_CONTACT_TWITCH'		=> 'Twitch',
	'IMG_ICON_CONTACT_XBOX'			=> 'Xbox Live',
	'IMG_ICON_CONTACT_PSN'			=> 'Play Station Network',
	'IMG_ICON_CONTACT_BEBO'			=> 'Bebo',
	'IMG_ICON_CONTACT_BLOGGER'		=> 'Blogger',
	'IMG_ICON_CONTACT_FB'			=> 'Facebook',
	'IMG_ICON_CONTACT_GR'			=> 'GoodReads',
	'IMG_ICON_CONTACT_LI'			=> 'LinkedIn',
	'IMG_ICON_CONTACT_MS'			=> 'MySpace',
	'IMG_ICON_CONTACT_NETLOG'		=> 'Netlog',
	'IMG_ICON_CONTACT_TWIT'			=> 'Twitter',
));

// language/*/common.php
$lang = array_merge($lang, array(
	'STEAM'				=> 'Steam',
	'YOUTUBE'			=> 'Youtube',
	'TWITCH'			=> 'Twitch',
	'XBOX'				=> 'Xbox Live',
	'BEBO'				=> 'Bebo',
	'BLOGGER'			=> 'Blogger',
	'FACEBOOK'			=> 'Facebook',
	'GOODREADS'			=> 'GoodReads',
	'LINKEDIN'			=> 'LinkedIn',
	'MYSPACE'			=> 'MySpace',
	'NETLOG'			=> 'Netlog',
	'TWITTER'			=> 'Twitter',

	'STEAM_EXPLAIN'				=> 'Enter your Steam username <em>only</em>.',
	'YOUTUBE_EXPLAIN'			=> 'Enter your Youtube username <em>only</em>.',
	'TWITCH_EXPLAIN'			=> 'Enter your Twitch ID <em>only</em>.',
	'XBOX_EXPLAIN'				=> 'Enter your Xbox Live Gamer Tag <em>only</em>.',
	'BEBO_EXPLAIN'				=> 'Enter your Bebo username <em>only</em>. <br/>Example: account name',
	'BLOGGER_EXPLAIN'			=> 'Enter your Blogger URL here. <br/>Example: http://yourblog.blogspot.com',
	'FACEBOOK_EXPLAIN'			=> 'Enter your public Facebook profile URL. <br/>Example: http://www.facebook.com/people/Your_Name/123456789',
	'GOODREADS_EXPLAIN'			=> 'Enter your Good Reads profile URL. <br/>Example: http://www.goodreads.com/user/show/3029590',
	'LINKEDIN_EXPLAIN'			=> 'Enter your public LinkedIn profile URL.  <br/>Example: http://www.linkedin.com/in/username',
	'MYSPACE_EXPLAIN'			=> 'Enter your MySpace account name <em>only</em>.  <br/>Example: account name',
	'NETLOG_EXPLAIN'			=> 'Enter your public Netlog profile URL.  <br/>Example: http://en.netlog.com/username',
	'TWITTER_EXPLAIN'			=> 'Enter your Twitter account name <em>only</em>.  <br/>Example: account name',
    
	'WRONG_DATA_STEAM'			=> 'The username you entered is not a valid steam id.',
	'WRONG_DATA_YOUTUBE'		=> 'The username you entered is not a valid Youtube user name.',
	'WRONG_DATA_TWITCH'			=> 'The username you entered is not a valid Twitch user name.',
	'WRONG_DATA_XBOX'			=> 'The username you entered is not a valid Xbox Live gamer tag.',
	'WRONG_DATA_BEBO'			=> 'The username you entered is not a valid Bebo user name.',
	'WRONG_DATA_BLOGGER'		=> 'The blogger address has to be a valid URL, including the protocol. For example http://www.yourblog.blogspot.com.',
	'WRONG_DATA_FACEBOOK'		=> 'The Facebook address has to be a valid URL, including the protocol. For example http://www.facebook.com/people/Your_Name/123456789.',
	'WRONG_DATA_GOODREADS'		=> 'The Good Reads address has to be a valid URL, including the protocol. For example http://www.goodreads.com/review/list/1234567.',
	'WRONG_DATA_LINKEDIN'		=> 'The LinkedIn address has to be a valid URL, including the protocol. For example http://www.linkedin.com/in/yourname.',
	'WRONG_DATA_MYSPACE'		=> 'The name you entered is not a valid MySpace account name.',
	'WRONG_DATA_NETLOG'			=> 'The Netlog address has to be a valid URL, including the protocol. For example http://en.netlog.com/YourName.',
	'WRONG_DATA_TWITTER'		=> 'The name you entered is not a valid Twitter account name.',
));

// language/*/memberlist.php
$lang = array_merge($lang, array(
	'VIEW_STEAM'			=> 'View Steam profile',
	'VIEW_YOUTUBE'			=> 'View Youtube profile',
	'VIEW_TWITCH'			=> 'View Twitch stream',
	'VIEW_XBOX'				=> 'View Xbox Live profile',
	'VIEW_BEBO'				=> 'View Bebo profile',
	'VIEW_BLOGGER'			=> 'View user’s blog',
	'VIEW_FACEBOOK'			=> 'View Facebook profile',
	'VIEW_GOODREADS'		=> 'View Good Reads profile',
	'VIEW_LINKEDIN'			=> 'View LinkedIn profile',
	'VIEW_MYSPACE'			=> 'View MySpace profile',
	'VIEW_NETLOG'			=> 'View Netlog profile',
	'VIEW_TWITTER'			=> 'View user’s Twitter page',
));

// language/*/ucp.php
$lang = array_merge($lang, array(
	'UCP_STEAM'			=> 'Steam Profile',	
	'UCP_YOUTUBE'		=> 'Youtube Profile',	
	'UCP_TWITCH'		=> 'Twitch stream',	
	'UCP_XBOX'			=> 'Xbox Live Profile',	
	'UCP_BEBO'			=> 'Bebo Profile',	
	'UCP_BLOGGER'		=> 'Blogger Link',
	'UCP_FACEBOOK'		=> 'Facebook Profile',
	'UCP_GOODREADS'		=> 'Good Reads Profile',
	'UCP_LINKEDIN'		=> 'LinkedIn Profile',
	'UCP_MYSPACE'		=> 'MySpace Profile',
	'UCP_NETLOG'		=> 'Netlog Profile',
	'UCP_TWITTER'		=> 'Twitter Profile',
));
?>
