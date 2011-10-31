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

	require_once '../pH5O.php';

	$i= new pH5O;


	//Descrbing the Standard and Language of HTML5 Document
	$standard=1;
	$lang='en-GB';
	$i->standard(1, $lang);

	//Starting Head Section
		//Describing Titile
			$title = 'Hello World!!!';
			$i->title($title);
		//Meta Tags
			/*
				Meta Tags are very important for Websites and it is seen that
				many websites doesn't use it or wrongly do it. The pH5O has the
				Objective to genrate the valid HTML5 webpage and to optimize the
				website as requirements of SEO.

				For more information see docs/meta.php
			*/

			//Adding keywords
			$meta_name = 'keywords';
			$value='Hello World !!!!';
			$i->meta(1, $meta_name, $value);
			$meta_name = 'content-type';
			$value='text/html;charset=UTF-8';
			$i->meta(2, $meta_name, $value);
			$meta_name = '';
			$value = 'UTF-8';
			$i->meta(3, $meta_name, $value);

		//HTML - HEAD - LINK
			$href = './abc.css';
			$rel = 'stylesheet';
			$media = array('projection', 'print');
			$hreflang = 'en-GB';
			$type = 'text/css';
			$i->link($rel, $type, $href, $media, $hreflang);
			$href = './def.css';
			$media = 'screen';
			$rel = array('alternate', 'stylesheet');
			$i->link($href, rel, $type, $media, $hreflang, $title);

		//HTML Base
			$i->base('http://vineet/', '_self');

		// HTML HEAD SCRIPT
			$src = './js/jquery.js';
			$async='ture';
			$defer='true';
			$type='text/javascript';
			$charset = 'UTF-8';
			$i->script($src, $type, $async, $defer, $charset);
			$src = './js/abc.js';
			$i->script($src, $type, $async, $defer, $charset);


		$i->render();
?>
