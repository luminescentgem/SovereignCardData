<?php

namespace App\Other;


$files = scandir('card_image');

foreach ($files as $oldPath)
{
    echo "$oldPath\n";
    $words = [];
    foreach (explode(" ", $oldPath) as $word) {
        if ($word !== '.jpg') {
            $words[] = strtolower($word);
        } else {
            $words[count($words)-1] .= strtolower($word);
        }
    }
    $newPath = implode(
        "_",
        $words,
    );
    rename('card_image/'.$oldPath, 'card_image/'.$newPath);
}