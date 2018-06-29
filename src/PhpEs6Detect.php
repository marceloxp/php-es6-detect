<?php
namespace marceloxp;

use \Browser;

/**
 * Class PHP to Browser ES6 compatibility detect
 */
class PhpEs6Detect
{
	public static function detect()
	{
		$_browser = new Browser();
		$browser = 
		[
			'name'    => $_browser->getBrowser(),
			'version' => $_browser->getVersion()
		];

		$support = 
		(
			($browser['name'] == Browser::BROWSER_EDGE    && $browser['version'] >= 16  ) || 
			($browser['name'] == Browser::BROWSER_FIREFOX && $browser['version'] >= 59  ) || 
			($browser['name'] == Browser::BROWSER_CHROME  && $browser['version'] >= 49  ) || 
			($browser['name'] == Browser::BROWSER_SAFARI  && $browser['version'] >= 11.1) || 
			($browser['name'] == Browser::BROWSER_ANDROID && $browser['version'] >= 67  )
		);
		
		$browser['support'] = $support;

		return $support;
	}

	public static function setScriptFolder($p_define_name = 'JSFOLDER', $p_javascript_script_folder = 'js', $p_ecmascript6_script_folder = 'es6')
	{
		if (!defined($p_define_name))
		{
			$is_es6 = self::detect();
			$folder = ($is_es6) ? $p_ecmascript6_script_folder : $p_javascript_script_folder;
			define($p_define_name, $folder);
		}
	}
}