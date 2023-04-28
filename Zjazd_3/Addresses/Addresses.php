<?php

$filename = 'References.txt';

if (file_exists($filename)) {
    $lines = file($filename);
} else {
    die("Plik $filename don't exist!");
}

echo "<ul>\n";
foreach ($lines as $line) {
    $parts = explode(';', $line);
    $url = trim($parts[0]);
    $description = trim($parts[1]);
    echo "<li><a href=\"$url\">$description</a></li>\n";
}
echo "</ul>";
