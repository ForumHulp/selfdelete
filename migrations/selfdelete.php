<?php
/**
*
* @package Self delete
* @copyright (c) 2014 John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace forumhulp\selfdelete\migrations;

class selfdelete extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['selfdelete_version']) && version_compare($this->config['selfdelete_version'], '3.1.0.RC4', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('selfdelete_version', '3.1.0.RC4')),
			array('module.add', array('ucp', 'UCP_PROFILE', 'UCP_SELFDELETE_TITLE')),
			array('module.add', array(
				'ucp', 'UCP_SELFDELETE_TITLE', array(
					'module_basename'	=> '\forumhulp\selfdelete\ucp\selfdelete_module',
					'modes'				=> array('selfdelete'),
				),
			)),
		);
	}
}
