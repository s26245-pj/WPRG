<?php


$bad_words = array('noob', 'fluck', 'beach', 'idiot');
function censor($text, $unwanted_words)
{
    $asterisk_count = strlen('*');
    foreach ($unwanted_words as $word) {
        $count_letters = strlen($word);
        $asterisk = str_repeat('*', $count_letters);
        $text = str_ireplace($word, $asterisk, $text);
    }
    return $text;
}

$text = 'Noob went to the beach, someone called him an idiot, and he said fluck';

$result = censor($text, $bad_words);

echo $result;
