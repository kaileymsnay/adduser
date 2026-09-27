<?php
/**
 *
 * Add User extension for the phpBB Forum Software package
 *
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\adduser\migrations\v104;

class version_104 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\phpbbmodders\adduser\migrations\v103\version_103'];
	}

	public function update_data()
	{
		return [
			['config.remove', ['adduser_version']],
		];
	}
}
