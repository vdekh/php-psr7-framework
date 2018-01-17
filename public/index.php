<?php


/*function getLang(Request $request, $default) {
    return
        !empty($request->getQueryParams()['lang']) ? $request->getQueryParams()['lang'] :
            (!empty($request->cookie()['lang']) ? $request->cookie()['lang'] :
                (!empty($request->getSession()['lang']) ? $request->getSession()['lang'] :
                    (!empty($request->getServer()['HTTP_ACCEPT_LANGUAGE']) ? substr($request->getServer()['lang'], 0, 2) : $default)));
}
session_start();
*/

use Framework\Http\Request;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

### Initialization

$request = new Request;

### Action

$name = $request->getQueryParams()['name'] ?? 'Guest';
header('X-Developer: vdekh');
echo 'Hello, ' . $name . '!';