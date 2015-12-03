<?php
/**
*
* @package Self delete
* @copyright (c) 2014 John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\selfdelete;

class ext extends \phpbb\extension\base
{
	function enable_step($old_state)
	{
		switch ($old_state)
		{
			case '': // Empty means nothing has run yet
				$this->container->get('user')->add_lang_ext('forumhulp/selfdelete', 'info_ucp_selfdelete');
				$this->container->get('user')->add_lang_ext('forumhulp/selfdelete', 'info_acp_selfdelete');
				$this->container->get('user')->add_lang('ucp');
				$this->container->get('template')->assign_var('L_EXTENSION_ENABLE_SUCCESS', $this->container->get('user')->lang['EXTENSION_ENABLE_SUCCESS'] .
				(isset($this->container->get('user')->lang['SELFDELETE_NOTICE']) ?
						sprintf($this->container->get('user')->lang['SELFDELETE_NOTICE'],
								$this->container->get('user')->lang['UCP'],
								$this->container->get('user')->lang['UCP_PROFILE'],
								$this->container->get('user')->lang['UCP_SELFDELETE_TITLE']) : ''));

				// Run parent enable step method
				return parent::enable_step($old_state);

			break;

			default:

				// Run parent enable step method
				return parent::enable_step($old_state);

			break;
		}
	}
}
