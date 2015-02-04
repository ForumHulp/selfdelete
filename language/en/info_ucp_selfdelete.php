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
    'UCP_SELFDELETE_TITLE'				=> 'Account deactivation',
    'UCP_PROFILE_DEACTIVATE'				=> 'Deactivation',
    'UCP_PROFILE_DEACTIVATE_USER'			=> 'Deactivate yourself',
    'UCP_PROFILE_DEACTIVATE_USER_EXPLAIN'	=> 'You are able to deactivate your account.<br />After deactivation of the account, it can be activated back by the forum administrator only.',
    'UCP_PROFILE_DEACTIVATE_SURE'			=> 'Are you sure you want to deactivate your account?',
    'UCP_PROFILE_DEACTIVATE_REASON'			=> 'What is the reason of deactivation?',
    'UCP_PROFILE_DEACTIVAT_CHAR'			=> 'Max. 100 characters',
    'UCP_PROFILE_DEACTIVAT_SUCCES'			=> 'Account deactivated!',
    'UCP_PROFILE_DEACTIVAT_OWNER'			=> 'Owners can not be deactivated!',
    'UCP_PROFILE_DEACTIVAT_FAIL'			=> 'Account was NOT deactivated<br />You have provided uncorrect forum password.'
));
