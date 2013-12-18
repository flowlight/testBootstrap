<?php
define('DEFAULT_LOCALE', 'fr_FR');

session_start();

if(isset($_GET['lang']))
{
	$lang = (isset($_GET['lang']))? $_GET['lang'] : DEFAULT_LOCALE;
	//echo "via URL ".$lang;
	$_SESSION['LANG'] = $lang;
}
else if(isset($_SESSION['LANG']))
{
	$lang = $_SESSION['LANG'];
	//echo "via SESSION ".$lang;
}
else
{
	$lang = DEFAULT_LOCALE;
	//echo "via Default ".$lang;
}

$filename = 'trad';
putenv("LC_ALL=$lang");
setlocale(LC_ALL, $lang);
bindtextdomain($filename, './locale');
bind_textdomain_codeset($filename, "UTF-8");
textdomain($filename);

?>
