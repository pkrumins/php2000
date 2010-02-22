<?php
/*
** Peteris Krumins
** peteris.krumins@gmail.com                 
**
** A simple URL routing code, written in 2000.
*/

error_reporting(E_ALL);

# check and parse the site configuration
#
if (!file_exists('website.conf')) {
    die('site configuration file was not found');
}

$SiteConfig = parse_ini_file('website.conf', true);

$parts = parse_url($_SERVER['REQUEST_URI']);
$path  = preg_replace('#^/+#',   '', $parts['path']); // drop slashes from the beginning of the request path
$path  = preg_replace('#(//)+#', '', $path);          // drop duplicate slashes
$path  = preg_replace('#/+$#',   '', $path);          // drop trailing slashes
$path  = split('/', $path);

$VConfig['request_path'] = $path;

$request_page = $VConfig['request_path'][0];

if (isset($SiteConfig['pages'][$request_page])) {
    $page = $request_page;
}
else if ($request_page == '') {
    $page = 'default';
}
else {
    $page = 'error';
}

require_once $SiteConfig['pages'][$page];

?>

