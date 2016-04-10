<?php

require ("vendor/autoload.php");

use \Michelf\MarkdownExtra;
use Symfony\Component\Yaml\Yaml;

require("header.php");
require("menu.php");

$post = $_GET['post'];

$trueFile = false;
foreach (glob("posts/*.md") as $file) {
    if ($file === 'posts/' .$post. ".md") {
        $trueFile = true;
    }
}

if (true === $trueFile) { 
    $postFile = __DIR__. '/posts/' .$post. '.md';
    $fileContent = file_get_contents($postFile);
    $reContent = "/\\+{3}.*?\\+{3}(.*?)$/s"; 
    preg_match($reContent, $fileContent, $matchesContent);
    $html = MarkdownExtra::defaultTransform($matchesContent[1]);


    printf("<hr /> <h3><a href=\"posts.php\">Artigos</a></h3> %s", PHP_EOL);
    echo $html;
}

require("footer.php");
