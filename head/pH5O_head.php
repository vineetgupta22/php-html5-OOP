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

	require_once pH5O_head.'pH5O_meta.php';
	require_once pH5O_head.'pH5O_link.php';
	require_once pH5O_head.'pH5O_script.php';

	class pH5O_head{
		protected $title;
		protected $_meta;
		protected $_base = array();
		protected $_link;
		protected $_script;

		public function __construct(){
			$this->_meta = new ph5O_meta();
			$this->_link = new ph5O_link();
			$this->_script = new ph5O_script();
			$this->_meta->add(1, 'generator', 'pH5O Object created by Vineet Gupta');
		}

		public function title($title){
			if(strlen($title)>0){
				$this->title=$title;
			}
		}

		public function render_title(){
			if($this->title){
				echo "\t<title>".utility::change_special($this->title)."</title>\n";
			}
			return;
		}

		public function render_base(){
			if(!empty($this->_base)){
				echo "\t<base href = '".$this->_base['href'];
				if(count($this->_base)==2){
					echo "' target='".$this->_base['target']."'>\n";
				} else {
					echo "'>\n";
				}
			}
		}

		public function render(){
			self::render_title();
			self::render_base();
			$this->_link->render();
			$this->_meta->render();
			$this->_script->render();
		}

		public function meta($type, $meta_name, $value){
			$this->_meta->add($type, $meta_name, $value);
		}

		public function link($rel, $type, $href, $media, $hreflang, $title=''){
			$this->_link->add($rel, $type, $href, $media, $hreflang, $title);
		}

		public function script($src, $type, $async, $defer, $charset){
			$this->_script->add($src, $type, $async, $defer, $charset);
		}

		public function base($href='', $target=''){
			if($href){
				$this->_base['href']=$href;
			}
			if($target){
				$this->_base['target']=$target;
			}
		}

	}
?>
