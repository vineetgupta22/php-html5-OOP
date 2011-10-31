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
	
	
	class utility{
		
		
		public function change_special($text_to_change){
			return htmlspecialchars($text_to_change,ENT_QUOTES,"UTF-8");
		}
		
		public function type($type){
			$type_mime_allowed = array("applicaiton/x-bytecode.python",
										"application/acad",
										"application/arj",
										"application/base64",
										"application/binhex",
										"application/binhex4",
										"application/book",
										"application/cdf",
										"application/clariscad",
										"application/commonground",
										"application/drafting",
										"application/dsptype",
										"application/dxf",
										"application/ecmascript",
										"application/envoy",
										"application/excel",
										"application/fractals",
										"application/freeloader",
										"application/futuresplash",
										"application/gnutar",
										"application/groupwise",
										"application/hlp",
										"application/hta",
										"application/i-deas",
										"application/iges",
										"application/inf",
										"application/java",
										"application/javascript",
										"application/java-byte-code",
										"application/lha",
										"application/lzx",
										"application/mac-binary",
										"application/mac-binhex",
										"application/mac-binhex40",
										"application/mac-compactpro",
										"application/macbinary",
										"application/marc",
										"application/mbedlet",
										"application/mcad",
										"application/mime",
										"application/mspowerpoint",
										"application/msword",
										"application/mswrite",
										"application/netmc",
										"application/octet-stream",
										"application/oda",
										"application/pdf",
										"application/pkcs-12",
										"application/pkcs-crl",
										"application/pkcs10",
										"application/pkcs7-mime",
										"application/pkcs7-signature",
										"application/pkix-cert",
										"application/pkix-crl",
										"application/plain",
										"application/postscript",
										"application/powerpoint",
										"application/pro_eng",
										"application/ringing-tones",
										"application/rtf",
										"application/sdp",
										"application/sea",
										"application/set",
										"application/sla",
										"application/smil",
										"application/solids",
										"application/sounder",
										"application/step",
										"application/streamingmedia",
										"application/toolbook",
										"application/vda",
										"application/vnd.fdf",
										"application/vnd.hp-hpgl",
										"application/vnd.hp-pcl",
										"application/vnd.ms-excel",
										"application/vnd.ms-pki.certstore",
										"application/vnd.ms-pki.pko",
										"application/vnd.ms-pki.seccat",
										"application/vnd.ms-pki.stl",
										"application/vnd.ms-powerpoint",
										"application/vnd.ms-project",
										"application/vnd.nokia.configuration-message",
										"application/vnd.nokia.ringing-tone",
										"application/vnd.rn-realmedia",
										"application/vnd.rn-realplayer",
										"application/vnd.wap.wmlc",
										"application/vnd.wap.wmlscriptc",
										"application/vnd.xara",
										"application/vocaltec-media-desc",
										"application/vocaltec-media-file",
										"application/wordperfect",
										"application/wordperfect6.0",
										"application/wordperfect6.1",
										"application/x-123",
										"application/x-aim",
										"application/x-authorware-bin",
										"application/x-authorware-map",
										"application/x-authorware-seg",
										"application/x-bcpio",
										"application/x-binary",
										"application/x-binhex40",
										"application/x-bsh","
										application/x-bytecode.elisp (compiled elisp)",
										"application/x-bzip",
										"application/x-bzip2",
										"application/x-cdf",
										"application/x-cdlink",
										"application/x-chat",
										"application/x-cmu-raster",
										"application/x-cocoa",
										"application/x-compactpro",
										"application/x-compress",
										"application/x-compressed",
										"application/x-conference",
										"application/x-cpio",
										"application/x-cpt",
										"application/x-csh",
										"application/x-deepv",
										"application/x-director",
										"application/x-dvi",
										"application/x-elc",
										"application/x-envoy",
										"application/x-esrehber",
										"application/x-excel",
										"application/x-frame",
										"application/x-freelance",
										"application/x-gsp",
										"application/x-gss",
										"application/x-gtar",
										"application/x-gzip",
										"application/x-hdf",
										"application/x-helpfile",
										"application/x-httpd-imap",
										"application/x-ima",
										"application/x-internett-signup",
										"application/x-inventor",
										"application/x-ip2",
										"application/x-java-class",
										"application/x-java-commerce",
										"application/x-javascript",
										"application/x-koan",
										"application/x-ksh",
										"application/x-latex",
										"application/x-lha",
										"application/x-lisp",
										"application/x-livescreen",
										"application/x-lotus",
										"application/x-lotusscreencam",
										"application/x-lzh",
										"application/x-lzx",
										"application/x-mac-binhex40",
										"application/x-macbinary",
										"application/x-magic-cap-package-1.0",
										"application/x-mathcad",
										"application/x-meme",
										"application/x-midi",
										"application/x-mif",
										"application/x-mix-transfer",
										"application/x-mplayer2",
										"application/x-msexcel",
										"application/x-mspowerpoint",
										"application/x-navi-animation",
										"application/x-navidoc",
										"application/x-navimap",
										"application/x-navistyle",
										"application/x-netcdf",
										"application/x-newton-compatible-pkg",
										"application/x-nokia-9000-communicator-add-on-software",
										"application/x-omc",
										"application/x-omcdatamaker",
										"application/x-omcregerator",
										"application/x-pagemaker",
										"application/x-pcl",
										"application/x-pixclscript",
										"application/x-pkcs10",
										"application/x-pkcs12",
										"application/x-pkcs7-certificates",
										"application/x-pkcs7-certreqresp",
										"application/x-pkcs7-mime",
										"application/x-pkcs7-signature",
										"application/x-pointplus",
										"application/x-portable-anymap",
										"application/x-project",
										"application/x-qpro",
										"application/x-rtf",
										"application/x-sdp",
										"application/x-sea",
										"application/x-seelogo",
										"application/x-sh",
										"application/x-shar",
										"application/x-shockwave-flash",
										"application/x-sit",
										"application/x-sprite",
										"application/x-stuffit",
										"application/x-sv4cpio",
										"application/x-sv4crc",
										"application/x-tar",
										"application/x-tbook",
										"application/x-tcl",
										"application/x-tex",
										"application/x-texinfo",
										"application/x-troff",
										"application/x-troff-man",
										"application/x-troff-me",
										"application/x-troff-ms",
										"application/x-troff-msvideo",
										"application/x-ustar",
										"application/x-visio",
										"application/x-vnd.audioexplosion.mzz",
										"application/x-vnd.ls-xpix",
										"application/x-vrml",
										"application/x-wais-source",
										"application/x-winhelp",
										"application/x-wintalk",
										"application/x-world",
										"application/x-wpwin",
										"application/x-wri",
										"application/x-x509-ca-cert",
										"application/x-x509-user-cert",
										"application/x-zip-compressed",
										"application/xml",
										"application/zip",
										"audio/aiff",
										"audio/basic",
										"audio/it",
										"audio/make",
										"audio/make.my.funk",
										"audio/mid",
										"audio/midi",
										"audio/mod",
										"audio/mpeg",
										"audio/mpeg3",
										"audio/nspaudio",
										"audio/s3m",
										"audio/tsp-audio",
										"audio/tsplayer",
										"audio/vnd.qcelp",
										"audio/voc",
										"audio/voxware",
										"audio/wav",
										"audio/x-adpcm",
										"audio/x-aiff",
										"audio/x-au",
										"audio/x-gsm",
										"audio/x-jam",
										"audio/x-liveaudio",
										"audio/x-mid",
										"audio/x-midi",
										"audio/x-mod",
										"audio/x-mpeg",
										"audio/x-mpeg-3",
										"audio/x-mpequrl",
										"audio/x-nspaudio",
										"audio/x-pn-realaudio",
										"audio/x-pn-realaudio-plugin",
										"audio/x-psid",
										"audio/x-realaudio",
										"audio/x-twinvq",
										"audio/x-twinvq-plugin",
										"audio/x-vnd.audioexplosion.mjuicemediafile",
										"audio/x-voc",
										"audio/x-wav",
										"audio/xm",
										"chemical/x-pdb",
										"drawing/x-dwf (old)",
										"i-world/i-vrml",
										"image/bmp",
										"image/cmu-raster",
										"image/fif",
										"image/florian",
										"image/g3fax",
										"image/gif",
										"image/ief",
										"image/jpeg",
										"image/jutvision",
										"image/naplps",
										"image/pict",
										"image/pjpeg",
										"image/png",
										"image/tiff",
										"image/vasa",
										"image/vnd.dwg",
										"image/vnd.fpx",
										"image/vnd.net-fpx",
										"image/vnd.rn-realflash",
										"image/vnd.rn-realpix",
										"image/vnd.wap.wbmp",
										"image/vnd.xiff",
										"image/x-cmu-raster",
										"image/x-dwg",
										"image/x-icon",
										"image/x-jg",
										"image/x-jps",
										"image/x-niff",
										"image/x-pcx",
										"image/x-pict",
										"image/x-portable-anymap",
										"image/x-portable-bitmap",
										"image/x-portable-graymap",
										"image/x-portable-greymap",
										"image/x-portable-pixmap",
										"image/x-quicktime",
										"image/x-rgb",
										"image/x-tiff",
										"image/x-windows-bmp",
										"image/x-xbitmap",
										"image/x-xbm",
										"image/x-xpixmap",
										"image/x-xwd",
										"image/x-xwindowdump",
										"image/xbm",
										"image/xpm",
										"message/rfc822",
										"model/iges",
										"model/vnd.dwf",
										"model/vrml",
										"model/x-pov",
										"multipart/x-gzip",
										"multipart/x-ustar",
										"multipart/x-zip",
										"music/crescendo",
										"music/x-karaoke",
										"paleovu/x-pv",
										"text/asp",
										"text/css",
										"text/ecmascript",
										"text/html",
										"text/javascript",
										"text/javascript1.0",
										"text/javascript1.1",
										"text/javascript1.2",
										"text/javascript1.3",
										"text/javascript1.4",
										"text/javascript1.5",
										"text/jscript",
										"text/livescript",
										"text/mcf",
										"text/pascal",
										"text/plain",
										"text/richtext",
										"text/scriplet",
										"text/sgml",
										"text/tab-separated-values",
										"text/uri-list",
										"text/vnd.abc",
										"text/vnd.fmi.flexstor",
										"text/vnd.rn-realtext",
										"text/vnd.wap.wml",
										"text/vnd.wap.wmlscript",
										"text/webviewhtml","
										text/x-asm",
										"text/x-audiosoft-intra",
										"text/x-c",
										"text/x-component",
										"text/x-ecmascript",
										"text/x-fortran",
										"text/x-h",
										"text/x-javascript",
										"text/x-java-source",
										"text/x-la-asf",
										"text/x-m",
										"text/x-pascal",
										"text/x-script",
										"text/x-script.csh",
										"text/x-script.elisp",
										"text/x-script.guile",
										"text/x-script.ksh",
										"text/x-script.lisp",
										"text/x-script.perl",
										"text/x-script.perl-module",
										"text/x-script.phyton",
										"text/x-script.rexx",
										"text/x-script.scheme",
										"text/x-script.sh",
										"text/x-script.tcl",
										"text/x-script.tcsh",
										"text/x-script.zsh",
										"text/x-server-parsed-html",
										"text/x-setext",
										"text/x-sgml",
										"text/x-speech",
										"text/x-uil",
										"text/x-uuencode",
										"text/x-vcalendar",
										"text/xml",
										"video/animaflex",
										"video/avi",
										"video/avs-video",
										"video/dl",
										"video/fli",
										"video/gl",
										"video/mpeg",
										"video/msvideo",
										"video/quicktime",
										"video/vdo",
										"video/vivo",
										"video/vnd.rn-realvideo",
										"video/vnd.vivo",
										"video/vosaic",
										"video/x-amt-demorun",
										"video/x-amt-showrun",
										"video/x-atomic3d-feature",
										"video/x-dl",
										"video/x-dv",
										"video/x-fli",
										"video/x-gl",
										"video/x-isvideo",
										"video/x-motion-jpeg",
										"video/x-mpeg",
										"video/x-mpeq2a",
										"video/x-ms-asf",
										"video/x-ms-asf-plugin",
										"video/x-msvideo",
										"video/x-qtc",
										"video/x-scm",
										"video/x-sgi-movie",
										"windows/metafile",
										"www/mime",
										"x-conference/x-cooltalk",
										"x-music/x-midi",
										"x-world/x-3dmf",
										"x-world/x-svr",
										"x-world/x-vrml",
										"x-world/x-vrt",
										"xgl/drawing",
										"xgl/movie"
			);
			foreach($type_mime_allowed as $mime_type){
				if($mime_type==$type){
					return $type;
				}
			}
			return '';
		}
		
		public function language($iso_code){
			$lang_code_valid = array('af',			//Afrikaans
									'af-ZA',		//Afrikaans (South Africa)
									'ar',			//Arabic
									'ar-AE',		//Arabic (U.A.E.)
									'ar-BH',		//Arabic (Bahrain)
									'ar-DZ',		//Arabic (Algeria)
									'ar-EG',		//Arabic (Egypt)
									'ar-IQ',		//Arabic (Iraq)
									'ar-JO',		//Arabic (Jordan)
									'ar-KW',		//Arabic (Kuwait)
									'ar-LB',		//Arabic (Lebanon)
									'ar-LY',		//Arabic (Libya)
									'ar-MA',		//Arabic (Morocco)
									'ar-OM',		//Arabic (Oman)
									'ar-QA',		//Arabic (Qatar)
									'ar-SA',		//Arabic (Saudi Arabia)
									'ar-SY',		//Arabic (Syria)
									'ar-TN',		//Arabic (Tunisia)
									'ar-YE',		//Arabic (Yemen)
									'az',			//Azeri (Latin)
									'az-AZ',		//Azeri (Latin) (Azerbaijan)
									'az-AZ',		//Azeri (Cyrillic) (Azerbaijan)
									'be',			//Belarusian
									'be-BY',		//Belarusian (Belarus)
									'bg',			//Bulgarian
									'bg-BG',		//Bulgarian (Bulgaria)
									'bs-BA',		//Bosnian (Bosnia and Herzegovina)
									'ca',			//Catalan
									'ca-ES',		//Catalan (Spain)
									'cs',			//Czech
									'cs-CZ',		//Czech (Czech Republic)
									'cy',			//Welsh
									'cy-GB',		//Welsh (United Kingdom)
									'da',			//Danish
									'da-DK',		//Danish (Denmark)
									'de',			//German
									'de-AT',		//German (Austria)
									'de-CH',		//German (Switzerland)
									'de-DE',		//German (Germany)
									'de-LI',		//German (Liechtenstein)
									'de-LU',		//German (Luxembourg)
									'dv',			//Divehi
									'dv-MV',		//Divehi (Maldives)
									'el',			//Greek
									'el-GR',		//Greek (Greece)
									'en',			//English
									'en-AU',		//English (Australia)
									'en-BZ',		//English (Belize)
									'en-CA',		//English (Canada)
									'en-CB',		//English (Caribbean)
									'en-GB',		//English (United Kingdom)
									'en-IE',		//English (Ireland)
									'en-JM',		//English (Jamaica)
									'en-NZ',		//English (New Zealand)
									'en-PH',		//English (Republic of the Philippines)
									'en-TT',		//English (Trinidad and Tobago)
									'en-US',		//English (United States)
									'en-ZA',		//English (South Africa)
									'en-ZW',		//English (Zimbabwe)
									'eo',			//Esperanto
									'es',			//Spanish
									'es-AR',		//Spanish (Argentina)
									'es-BO',		//Spanish (Bolivia)
									'es-CL',		//Spanish (Chile)
									'es-CO',		//Spanish (Colombia)
									'es-CR',		//Spanish (Costa Rica)
									'es-DO',		//Spanish (Dominican Republic)
									'es-EC',		//Spanish (Ecuador)
									'es-ES',		//Spanish (Castilian)
									'es-ES',		//Spanish (Spain)
									'es-GT',		//Spanish (Guatemala)
									'es-HN',		//Spanish (Honduras)
									'es-MX',		//Spanish (Mexico)
									'es-NI',		//Spanish (Nicaragua)
									'es-PA',		//Spanish (Panama)
									'es-PE',		//Spanish (Peru)
									'es-PR',		//Spanish (Puerto Rico)
									'es-PY',		//Spanish (Paraguay)
									'es-SV',		//Spanish (El Salvador)
									'es-UY',		//Spanish (Uruguay)
									'es-VE',		//Spanish (Venezuela)
									'et',			//Estonian
									'et-EE',		//Estonian (Estonia)
									'eu',			//Basque
									'eu-ES',		//Basque (Spain)
									'fa',			//Farsi
									'fa-IR',		//Farsi (Iran)
									'fi',			//Finnish
									'fi-FI',		//Finnish (Finland)
									'fo',			//Faroese
									'fo-FO',		//Faroese (Faroe Islands)
									'fr',			//French
									'fr-BE',		//French (Belgium)
									'fr-CA',		//French (Canada)
									'fr-CH',		//French (Switzerland)
									'fr-FR',		//French (France)
									'fr-LU',		//French (Luxembourg)
									'fr-MC',		//French (Principality of Monaco)
									'gl',			//Galician
									'gl-ES',		//Galician (Spain)
									'gu',			//Gujarati
									'gu-IN',		//Gujarati (India)
									'he',			//Hebrew
									'he-IL',		//Hebrew (Israel)
									'hi',			//Hindi
									'hi-IN',		//Hindi (India)
									'hr',			//Croatian
									'hr-BA',		//Croatian (Bosnia and Herzegovina)
									'hr-HR',		//Croatian (Croatia)
									'hu',			//Hungarian
									'hu-HU',		//Hungarian (Hungary)
									'hy',			//Armenian
									'hy-AM',		//Armenian (Armenia)
									'id',			//Indonesian
									'id-ID',		//Indonesian (Indonesia)
									'is',			//Icelandic
									'is-IS',		//Icelandic (Iceland)
									'it',			//Italian
									'it-CH',		//Italian (Switzerland)
									'it-IT',		//Italian (Italy)
									'ja',			//Japanese
									'ja-JP',		//Japanese (Japan)
									'ka',			//Georgian
									'ka-GE',		//Georgian (Georgia)
									'kk',			//Kazakh
									'kk-KZ',		//Kazakh (Kazakhstan)
									'kn',			//Kannada
									'kn-IN',		//Kannada (India)
									'ko',			//Korean
									'ko-KR',		//Korean (Korea)
									'kok',			//Konkani
									'kok-IN',		//Konkani (India)
									'ky',			//Kyrgyz
									'ky-KG',		//Kyrgyz (Kyrgyzstan)
									'lt',			//Lithuanian
									'lt-LT',		//Lithuanian (Lithuania)
									'lv',			//Latvian
									'lv-LV',		//Latvian (Latvia)
									'mi',			//Maori
									'mi-NZ',		//Maori (New Zealand)
									'mk',			//FYRO Macedonian
									'mk-MK',		//FYRO Macedonian (Former Yugoslav Republic of Macedonia)
									'mn',			//Mongolian
									'mn-MN',		//Mongolian (Mongolia)
									'mr',			//Marathi
									'mr-IN',		//Marathi (India)
									'ms',			//Malay
									'ms-BN',		//Malay (Brunei Darussalam)
									'ms-MY',		//Malay (Malaysia)
									'mt',			//Maltese
									'mt-MT',		//Maltese (Malta)
									'nb',			//Norwegian (Bokm?l)
									'nb-NO',		//Norwegian (Bokm?l) (Norway)
									'nl',			//Dutch
									'nl-BE',		//Dutch (Belgium)
									'nl-NL',		//Dutch (Netherlands)
									'nn-NO',		//Norwegian (Nynorsk) (Norway)
									'ns',			//Northern Sotho
									'ns-ZA',		//Northern Sotho (South Africa)
									'pa',			//Punjabi
									'pa-IN',		//Punjabi (India)
									'pl',			//Polish
									'pl-PL',		//Polish (Poland)
									'ps',			//Pashto
									'ps-AR',		//Pashto (Afghanistan)
									'pt',			//Portuguese
									'pt-BR',		//Portuguese (Brazil)
									'pt-PT',		//Portuguese (Portugal)
									'qu',			//Quechua
									'qu-BO',		//Quechua (Bolivia)
									'qu-EC',		//Quechua (Ecuador)
									'qu-PE',		//Quechua (Peru)
									'ro',			//Romanian
									'ro-RO',		//Romanian (Romania)
									'ru',			//Russian
									'ru-RU',		//Russian (Russia)
									'sa',			//Sanskrit
									'sa-IN',		//Sanskrit (India)
									'se',			//Sami (Northern)
									'se-FI',		//Sami (Northern) (Finland)
									'se-FI',		//Sami (Skolt) (Finland)
									'se-FI',		//Sami (Inari) (Finland)
									'se-NO',		//Sami (Northern) (Norway)
									'se-NO',		//Sami (Lule) (Norway)
									'se-NO',		//Sami (Southern) (Norway)
									'se-SE',		//Sami (Northern) (Sweden)
									'se-SE',		//Sami (Lule) (Sweden)
									'se-SE',		//Sami (Southern) (Sweden)
									'sk',			//Slovak
									'sk-SK',		//Slovak (Slovakia)
									'sl',			//Slovenian
									'sl-SI',		//Slovenian (Slovenia)
									'sq',			//Albanian
									'sq-AL',		//Albanian (Albania)
									'sr-BA',		//Serbian (Latin) (Bosnia and Herzegovina)
									'sr-BA',		//Serbian (Cyrillic) (Bosnia and Herzegovina)
									'sr-SP',		//Serbian (Latin) (Serbia and Montenegro)
									'sr-SP',		//Serbian (Cyrillic) (Serbia and Montenegro)
									'sv',			//Swedish
									'sv-FI',		//Swedish (Finland)
									'sv-SE',		//Swedish (Sweden)
									'sw',			//Swahili
									'sw-KE',		//Swahili (Kenya)
									'syr',			//Syriac
									'syr-SY',		//Syriac (Syria)
									'ta',			//Tamil
									'ta-IN',		//Tamil (India)
									'te',			//Telugu
									'te-IN',		//Telugu (India)
									'th',			//Thai
									'th-TH',		//Thai (Thailand)
									'tl',			//Tagalog
									'tl-PH',		//Tagalog (Philippines)
									'tn',			//Tswana
									'tn-ZA',		//Tswana (South Africa)
									'tr',			//Turkish
									'tr-TR',		//Turkish (Turkey)
									'tt',			//Tatar
									'tt-RU',		//Tatar (Russia)
									'ts',			//Tsonga
									'uk',			//Ukrainian
									'uk-UA',		//Ukrainian (Ukraine)
									'ur',			//Urdu
									'ur-PK',		//Urdu (Islamic Republic of Pakistan)
									'uz',			//Uzbek (Latin)
									'uz-UZ',		//Uzbek (Latin) (Uzbekistan)
									'uz-UZ',		//Uzbek (Cyrillic) (Uzbekistan)
									'vi',			//Vietnamese
									'vi-VN',		//Vietnamese (Viet Nam)
									'xh',			//Xhosa
									'xh-ZA',		//Xhosa (South Africa)
									'zh',			//Chinese
									'zh-CN',		//Chinese (S)
									'zh-HK',		//Chinese (Hong Kong)
									'zh-MO',		//Chinese (Macau)
									'zh-SG',		//Chinese (Singapore)
									'zh-TW',		//Chinese (T)
									'zu',			//Zulu
									'zu-ZA'		//Zulu (South Africa)
			);
			foreach($lang_code_valid as $lang){
				if($lang==$iso_code){
					return $lang;
				}
			}
			return '';
		}
		
		public function media($media){
			$valid_media = array('all',
								'aural',
								'braille',
								'handheld',
								'projection',
								'print',
								'screen',
								'tty',
								'tv'
			);
			$types = array();
			if(is_array($media)){
				foreach($media as $e_type){
					foreach($valid_media as $v_media){
						if($v_media == $e_type){
							$types[]=$e_type;
						}
					}
				}
			} else {
				foreach($valid_media as $v_media){
					if($v_media == $media){
						$types[]=$media;
					}
				}
			}
			return $types;
		}
		
		public function rel($rel){
			$valid_rel = array('alternate',
								'author',
								'help',
								'icon',
								'license',
								'prefetch',
								'next',
								'prev',
								'search',
								'stylesheet'
			);
			$types = array();
			if(is_array($rel)){
				foreach($rel as $e_rel){
					foreach($valid_rel as $v_media){
						if($v_media == $e_rel){
							$types[]=$e_rel;
						}
					}
				}
			} else {
				foreach($valid_rel as $v_media){
					if($v_media == $rel){
						$types[]=$rel;
					}
				}
			}
			return $types;
		}
		
		public function charset($charset){
			$valid_charset = array('ISO-8859-1',
									'ISO-8859-2',
									'ISO-8859-3',
									'ISO-8859-4',
									'ISO-8859-5',
									'ISO-8859-6',
									'ISO-8859-7',
									'ISO-8859-8',
									'ISO-8859-9',
									'ISO-8859-10',
									'ISO-8859-15',
									'ISO-2022-JP',
									'ISO-2022-JP-2',
									'ISO-2022-KR',
									'UTF-8',
									'UTF-16'
			);
			foreach($valid_charset as $v_charset){
				if($v_charset == $charset){
					return $charset;
				}
			}
			return '';
		}
		
	}
?>
