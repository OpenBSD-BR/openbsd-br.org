<?php

require ("vendor/autoload.php");

use \Michelf\MarkdownExtra;
use Symfony\Component\Yaml\Yaml;

require("header.php");
require("menu.php");

printf("<hr /> <h3>Artigos</h3> %s", PHP_EOL);

foreach (glob("posts/*.md") as $file) {
    $fileContent = file_get_contents($file);

    $reHeader = "/\\+{3}(.*?)\\+{3}/s"; 
    preg_match($reHeader, $fileContent, $matchesHeader);
    
    $header = Yaml::parse($matchesHeader[1]);

    $reContent = "/\\+{3}.*?\\+{3}(.*?)$/s"; 
    preg_match($reContent, $fileContent, $matchesContent);

    printf("<p><a href='view-post.php?post=%s'>%s</a></p> %s",
        str_replace('.md', '', str_replace('posts/', '', $file)),
        $header['details']['title'],
        PHP_EOL
    );
}
require("footer.php");

