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



	// Setting the flag that this is a parent file.
	define('_pH50', 1);
	// Setting the Base Path as current location
	define('pH5O_bpath', dirname(__FILE__));

	require_once pH5O_bpath.'/include/framework.php';


	class pH5O{
		/*
		 * HTML is divided in three sections
		 * Root start and end with HTML
		 * Head start and end with HEAD
		 * Body start and end with BODY
		 *
		 * In any HTML Pages these three are the important things
		 * which may furthur divide into many thing
		*/
		public $_html;
		public $_head;
		public $_body;

		public function __construct(){
			$this->_html = new pH5O_html;
			$this->_head = new pH5O_head;
			$this->_body = new pH5O_body;
		}

		public function title($title){
			$this->_head->title($title);
		}

		public function standard($standard = 1, $lang='', $manifest=''){
			$this->_html->standard($standard, $lang, $manifest);
		}

		public function render(){
			$this->_html->render();
			echo "<head>\n";
			$this->_head->render();
			echo "</head>\n";
			echo "<body>\n";
			$this->_body->render();
			echo "</body>\n";
			echo "</html>\n";
		}

		public function meta($type, $meta_name, $value){
			$this->_head->meta($type, $meta_name, $value);
		}

		public function base($href='', $target=''){
			$this->_head->base($href, $target);
		}

		public function link($href, $rel='', $type='', $media='', $hreflang='', $title=''){
			$this->_head->link($href, $rel, $type, $media, $hreflang, $title);
		}
		
		public function script($src, $type='', $async='', $defer='', $charset=''){
			$this->_head->script($src, $type, $async, $defer, $charset);
		}

	}
?>
