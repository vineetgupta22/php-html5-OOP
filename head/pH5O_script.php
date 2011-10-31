<?PHP
/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation,either version 3 of the License.
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
 * @copyright	2011,Cee Emm Infotech,All Rights Reserved.
 * @author		Vineet Gupta <vineetgupta22@gmail.com>
 *
 */

	defined('_pH50') or die('Direct Access to the File is not allowed.');
	
	
	class pH5O_script{
		protected $content = array();
		
		public function add($src,$type,$async,$defer,$charset){
			$a = array();
			$a['src']=$src;
			$a['type']= utility::type($type);
			if($async=='async' or $async=true or $async=1){
				$a['async']='async';
			}
			if($defer=='defer' or $defer=true or $defer=1){
				$a['defer']='defer';
			}
			if($charset){
				$a['charset']=utility::charset($charset);
			}
			$this->content[]=$a;
		}
		
		public function render(){
			$script = $this->content;
			foreach($script as $content){
				echo "\t<script src='".$content['src']."'";
				if($content['type']){
					echo " type='".$content['type']."'";
				}
				if($content['async']){
					echo " async = '".$content['async']."'";
				}
				if($content['defer']){
					echo " defer = '".$content['defer']."'";
				}
				if($content['charset']){
					echo " charset = '".$content['charset']."'";
				}
				
				echo ">\n\t</script>\n";
			}
			
		}
	}

?>
