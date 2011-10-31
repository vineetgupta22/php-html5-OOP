We had divided the HTML5 into three parts:
------------------------------------------
1. HTML - Doctype and Language declaration 
2. HTML HEAD - Meta tags, base, link, title, javascript 
   [internal css are left, it would be done with body element]
3. BODY - Contains all the html5 tags

Working of the Object
---------------------
We have to just include the pH50 - pH50.php file in the project
$i= new pH5O;
$standard=1;
$lang='en-GB';
$i->standard(1, $lang);

Adding title
------------
$title = 'Hello World!!!';
$i->title($title);


Meta Tags
---------
Only Valid Meta Tags would be added

$meta_name = 'keywords';
$value='Hello World !!!!';
$i->meta(1, $meta_name, $value);

$meta_name = 'content-type';
$value='text/html;charset=UTF-8';
$i->meta(2, $meta_name, $value);

$meta_name = '';
$value = 'UTF-8';
$i->meta(3, $meta_name, $value);


Adding link
-----------
First Link

$href = './abc.css';
$rel = 'stylesheet';
$media = array('projection', 'print');
$hreflang = 'en-GB';
$type = 'text/css';
$i->link($rel, $type, $href, $media, $hreflang);

Second Link
$href = './def.css';
$media = 'screen';
$rel = array('alternate', 'stylesheet');
$i->link($href, rel, $type, $media, $hreflang, $title);


Adding Base
-----------
$i->base('http://localhost/', '_self');


Adding Scripts
--------------

First Script

$src = './js/jquery.js';
$async='ture';
$defer='true';
$type='text/javascript';
$charset = 'UTF-8';
$i->script($src, $type, $async, $defer, $charset);

Second Script

$src = './js/abc.js';
$i->script($src, $type, $async, $defer, $charset);


Printing of contents
---------------------
$document->render();


Output
------

<!DOCTYPE HTML>
<html lang='en-GB'>

<head>
	<title>Hello World!!!</title>
	<base href = 'http://localhost/' target='_self'>
	<link href='stylesheet' media='projection and print' hreflang = 'en-GB' / >
	<link href='./def.css' type='text/css' media='screen' title = 'Hello World!!!' hreflang = 'en-GB' / >
	<meta name='generator' content='pH5O Object created by Vineet Gupta' />
	<meta name='keywords' content='Hello World !!!!' />
	<meta http_equiv='content-type' content='text/html;charset=UTF-8' />
	<meta charset='UTF-8' />
	<script src='./js/jquery.js' type='text/javascript' async = 'async' defer = 'defer' charset = 'UTF-8'>
	</script>
	<script src='./js/abc.js' type='text/javascript' async = 'async' defer = 'defer' charset = 'UTF-8'>
	</script>
</head>
<body>
</body>
</html>