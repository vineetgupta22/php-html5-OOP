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

	class pH5O_link{
		protected $content = array();

		public function add($href, $rel, $type, $media, $hreflang, $title){
			$a = array();
			$a['href']=$href;
			$a['hreflang']=utility::language($hreflang);
			$a['type']=utility::type($type);
			$a['media']=utility::media($media);
			$a['rel']=utility::rel($rel);
			$a['title']=$title;
			$this->content[]=$a;
		}

		public function render(){
			$link = $this->content;
			foreach($link as $content){
				echo "\t<link href='".$content['href']."' ";
				if($content['type']){
					echo " type='".$content['type']."' ";
				}
				if($content['media']){
					$first = true;
					echo " media='";
					foreach($content['media'] as $media){
						if($first){
							echo $media;
							$first = false;
						} else {
							echo " and ".$media;
						}
					}
					echo "' ";
				}
				if($content['rel']){
					$first = true;
					echo " rel='";
					foreach($content['rel'] as $media){
						if($first){
							echo $media;
							$first = false;
						} else {
							echo " ".$media;
						}
					}
					echo "' ";
				}
				if($content['title']){
					echo " title = '".$content['title']."' ";
				}
				if($content['hreflang']){
					echo " hreflang = '".$content['hreflang']."' ";
				}
				echo "/ >\n";
			}
		}
	}
?>
