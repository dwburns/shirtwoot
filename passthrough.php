<?php
// This proxies content from the shirt.woot xml feed since it doesn't 
// appear to be working directly when called from google
$handle = @fopen('http://shirt.woot.com/salerss.aspx', 'r');
$html = "";
if ($handle) {
    while (!feof($handle)) {
        print fgets($handle, 4096);
    }
    fclose($handle);
}