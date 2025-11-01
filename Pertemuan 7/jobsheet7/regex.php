<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan! <br>";
} else {
    echo "Tidak ada huruf kecil! <br>";
}

$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok! <br>";
}


$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie. <br>';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text;


$pattern = '/go*d/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok! <br>";
}
