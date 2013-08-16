<?php

include "chapters.php";

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
$pagesdir  = realpath('pages');
$page_name = basename($_SERVER["PATH_INFO"]);
$filename  = realpath($pagesdir . '/' . $page_name . '.md');

if (!is_file($filename) || !is_prefix($pagesdir, $filename)) {
    header("HTTP1/.0 404 Not Found");
    echo "Pagina niet gevonden.";
    die;
}

# Read file and pass content through the Markdown praser
$text = file_get_contents($filename);
$meta = new JsonFrontMatter($text);
$meta->parse();
$html = MarkdownExtra::defaultTransform($meta->content());

$template = $meta->get('template', 'text');
$title    = $meta->get('title', basename($filename));

include 'templates/' . $template . '.php';

?>
