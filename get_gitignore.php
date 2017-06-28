<?php
/**
 * execute php get_gitignore.php to get files which you need to put into your .gitignore after installation
 */
$contents = file_get_contents(dirname(__FILE__) . '/modman');
$lines = explode("\n", $contents);
$gitIgnore = [];
foreach ($lines as $line) {
    $path = explode(" ", $line);
    $path = $path[1];
    $gitIgnore[] = '/' . trim($path);
}
$gitIgnore = implode("\n", $gitIgnore);
echo $gitIgnore . "\n";