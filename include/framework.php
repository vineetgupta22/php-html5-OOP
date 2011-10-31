<?PHP
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details. You should have
 * received a copy of the GNU General Public License along with
 * this program.
 *
 * 
 *
 * @package		PHP-HTML5-OOP
 * @contents	Standard Library Starts here
 * @copyright	2011, Cee Emm Infotech, All Rights Reserved.
 * @author		Vineet Gupta <vineetgupta22@gmail.com>
 *
 */

	defined('_pH50') or die('Direct Access to the File is not allowed.');
	
	if(!defined('DS')){
		define('DS', DIRECTORY_SEPARATOR);
	}
	
	$parts = explode(DS, pH5O_bpath);
	define('pH5O_root', implode(DS, $parts). DS);
	define('pH5O_include', pH5O_root. 'include'. DS);
	define('pH5O_html', pH5O_root. 'html'. DS);
	define('pH5O_head', pH5O_root. 'head'. DS);
	define('pH5O_body', pH5O_root. 'body'. DS);
	define('pH5O_utility', pH5O_root. 'utility'. DS);
	
	
	require_once pH5O_include. 'seklton.php';
	
 
?>
