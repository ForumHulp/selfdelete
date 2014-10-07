<?php
/**
*
* @package Self delete
* @copyright (c) 2014 John Peskens (http://ForumHulp.com) and Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\selfdelete\ucp;

class selfdelete_info
{
	function module()
	{
		return array(
			'filename'    => 'forumhulp\selfdelete\ucp\selfdelete_module',
			'title'        => 'UCP_SELFDELETE_TITLE',
			'version'    => '1.0.0',
			'modes'        => array(
				'selfdelete'		=> array(
											'title'	=> 'UCP_SELFDELETE_TITLE',
											'auth'	=> 'ext_forumhulp/selfdelete',
											'cat'	=> array('UCP_PROFILE')
										),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
