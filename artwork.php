<?php

require ("vendor/autoload.php");

use \Michelf\MarkdownExtra;
use Symfony\Component\Yaml\Yaml;

require("header.php");
require("menu.php");

$postFile = __DIR__. '/artwork/artwork.md';
$fileContent = file_get_contents($postFile);
$reContent = "/\\+{3}.*?\\+{3}(.*?)$/s";
preg_match($reContent, $fileContent, $matchesContent);
$html = MarkdownExtra::defaultTransform($matchesContent[1]);


printf("<hr /> <h3>Artwork</h3>");
echo $html;

require("footer.php");

