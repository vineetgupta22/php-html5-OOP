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
	
	class pH5O_html{
		protected $_standard;
		protected $_language;
		protected $_manifest;
		
		
		public function standard($standard = 1, $lang='', $manifest=''){
			if($standard){
				switch($standard){
					case 1:
						$this->_standard='!DOCTYPE HTML';
						break;
					default:
						$this->_standard='!DOCTYPE HTML';
						lang();
						break;
				}
			} else {
				$this->_standard='!DOCTYPE HTML';
			}
			$this->_language=utility::language($lang);
			$this->_manifest=self::manifest($manifest);
		}
		
		public function manifest($manifest){
			if(strlen($manifest)>0){
				return $manifest;
			} else {
				return '';
			}
		}
		
		public function render(){
			ob_start();
			session_start();
			if($this->_standard){
				echo '<'.$this->_standard.">\n";
			} else {
				echo "<!DOCTYPE HTML>\n";
			}
			if($this->_language){
				echo "<html lang='".$this->_language;
			} else {
				echo "<html lang='en";
			}
			
			if(strlen($this->_manifest)){
				echo "' manifest='".$this->_manifest."'>";
			} else {
				echo "'>\r\n";
			}
		}
	}
	
?>
