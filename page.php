<?php

function is_prefix($prefix, $string) {
    return substr($string, 0, strlen($prefix)) == $prefix;
}

# Install PSR-0-compatible class autoloader
spl_autoload_register(function($class) {
	require 'lib/' . preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')) . '.php';
});

# Get Markdown class
use \Michelf\MarkdownExtra;

# Resolve file w.r.t. pages directory
$pagesdir = realpath('pages');
$filename = realpath($pagesdir . $_SERVER["PATH_INFO"] . '.md');

if (!is_file($filename) || !is_prefix($pagesdir, $filename)) {
    header("HTTP1/.0 404 Not Found");
    echo "Pagina niet gevonden.";
    die;
}

# Read file and pass content through the Markdown praser
$meta = new FrontMatter($filename);
$text = file_get_contents($filename);
$html = MarkdownExtra::defaultTransform($meta->fetch('content'));

$template = @$meta->fetch('template');
if (!$template) $template = 'text';
$title    = @$meta->fetch('title');
if (!$title) $title = basename($filename);

include 'templates/' . $template . '.php';

?>
