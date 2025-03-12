<?php
$str = "dskfjjdh W3school.com";
$pattern = "/W3SCHOOL.COM/i";

echo preg_match($pattern, $str);

$str1 = "The rain in SPAIN falls mainly on the plains.";
$patterns = "/ain/i";
echo "<br/>";
echo preg_match_all($patterns, $str1);

$str = "visit MICROSOFT";
$pattern = "/microsoft/i";
echo "<br/>";
echo preg_replace($pattern, "w3school.com", $str);