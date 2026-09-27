<?php
/**
 *
 * Add User extension for the phpBB Forum Software package
 *
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\adduser\migrations\v101;

class version_101 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['adduser_version']) && version_compare($this->config['adduser_version'], '1.0.1', '>=');
	}

	static public function depends_on()
	{
		return ['\phpbbmodders\adduser\migrations\v100\install_v100'];
	}

	public function update_data()
	{
		return [
			['config.update', ['adduser_version', '1.0.1']],
		];
	}
}
