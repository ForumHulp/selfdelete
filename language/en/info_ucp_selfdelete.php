<?php
/**
*
* @package Self delete
* @copyright (c) 2014 John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'UCP_SELFDELETE_TITLE'					=> 'Account deactiveren',
	'UCP_PROFILE_DEACTIVATE'				=> 'Deactiveren',
	'UCP_PROFILE_DEACTIVATE_USER'			=> 'Gebruiker deactiveren',
	'UCP_PROFILE_DEACTIVATE_USER_EXPLAIN'	=> 'Hier kan je zelf jouw account deactiveren.<br />Het kan alleen door een administrator opgeheven worden.',
	'UCP_PROFILE_DEACTIVATE_SURE'			=> 'Weet je zeker dat je jouw account wilt deactiveren?',
	'UCP_PROFILE_DEACTIVATE_REASON'			=>	'Reden voor deactiveren',
	'UCP_PROFILE_DEACTIVAT_CHAR'			=> '100 karakters max.',

	'UCP_PROFILE_DEACTIVAT_SUCCES'			=> 'Account gedeactiveerd!',
	'UCP_PROFILE_DEACTIVAT_OWNER'			=> 'Eigenaars kunnen niet gedeactiveerd worden!',
	'UCP_PROFILE_DEACTIVAT_FAIL'			=> 'Account niet gedeactiveerd<br />Paswoord niet opgegeven of klopt niet.'
));
