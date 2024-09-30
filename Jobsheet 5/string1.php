<?php
$loremIpsum = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
    Soluta dolorum perferendis ut veritatis iste obcaecati voluptatibus 
    veniam odit id enim quod atque, 
    commodi libero earum cum delectus. Ipsum, perspiciatis nulla!";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter : " . strlen($loremIpsum) . "<br>";
echo "Panjanag kata : " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>