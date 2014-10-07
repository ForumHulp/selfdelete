<?php
/**
*
* @package Self delete
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\selfdelete\ucp;

class selfdelete_module
{
	public $u_action;
	function main($id, $mode)
	{
		global $db, $config, $user, $cache, $template, $request, $phpbb_root_path, $phpbb_container, $phpEx;

		$this->page_title = $user->lang['ACP_CRON_STATUS_TITLE'];
		$this->tpl_name = 'ucp_profile_deactivate';

		if (!$user->data['is_registered'])
		{
			trigger_error('NO_USER');
		}

		$deactivate		= request_var('deactivate', '');
		$cur_password	= request_var('cur_password', '');
		$d_reason		= utf8_normalize_nfc(request_var('d_reason', 'Geen reden opgegeven!', true));	
		$uid 			= (int) $user->data['user_id'];
		
		$d_reason = substr($d_reason, 0, 100);
		
		if ($deactivate && !phpbb_check_hash($cur_password, $user->data['user_password']))
		{
			meta_refresh(5, append_sid($this->u_action));	
			trigger_error($user->lang['UCP_PROFILE_DEACTIVAT_FAIL'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $this->u_action . '">', '</a>'));
		}
		if ($user->data['user_type'] == USER_FOUNDER) 
		{
			meta_refresh(5, append_sid("{$phpbb_root_path}ucp.$phpEx?i=profile"));
			trigger_error($user->lang['UCP_PROFILE_DEACTIVAT_OWNER'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $phpbb_root_path. 'ucp.' . $phpEx  .'?i=profile">', '</a>'));
		}

		if ($deactivate && phpbb_check_hash($cur_password, $user->data['user_password']))
		{
			$sql = 'UPDATE ' . USERS_TABLE . ' SET user_type = 1 , user_inactive_reason = 5, user_inactive_time = ' . time() . ' WHERE user_id = ' . $uid;
			$db->sql_query($sql);
			add_log('user', $uid, 'INACTIVE_BY_USER', $d_reason, $user->data['username']);
			
			meta_refresh(3, append_sid("{$phpbb_root_path}index.$phpEx"));
			$user->session_kill();
			$user->session_begin();
			trigger_error($user->lang['UCP_PROFILE_DEACTIVAT_SUCCES']);			
		}

		$template->assign_vars(array(
			'U_ACTION'					=>	$this->u_action,
		));
	}
}
