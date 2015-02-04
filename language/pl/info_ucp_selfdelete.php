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
	'UCP_SELFDELETE_TITLE'					=> 'Dezaktywacja konta',
	'UCP_PROFILE_DEACTIVATE'				=> 'Dezaktywacja permanentna',
	'UCP_PROFILE_DEACTIVATE_USER'			=> 'Zdezaktywuj swoje konto na zawsze',
	'UCP_PROFILE_DEACTIVATE_USER_EXPLAIN'	=> 'Masz możliwość permanentnej dezaktywacji swojego konta.<br />Po dezaktywacji, konto może zostać przywrócone jedynie przez administratora forum!',
	'UCP_PROFILE_DEACTIVATE_SURE'			=> 'Czy jesteś pewna(y), że chcesz permanentnie zdezaktywować swoje konto?',
	'UCP_PROFILE_DEACTIVATE_REASON'			=> 'Jaka jest przyczyna dezaktywacji?',
	'UCP_PROFILE_DEACTIVAT_CHAR'			=> 'Max. 100 znaków',
	'UCP_PROFILE_DEACTIVAT_SUCCES'			=> 'Konto zostało zdezaktywowane!',
	'UCP_PROFILE_DEACTIVAT_OWNER'			=> 'Właściciele forum nie mogą zdezaktywować swojego konta!',
	'UCP_PROFILE_DEACTIVAT_FAIL'			=> 'Konto nie zostało zdezaktywowane.<br />Podałaś(eś) nieprawidłowe hasło.'
));
