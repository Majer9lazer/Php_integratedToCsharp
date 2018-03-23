
<?php

// function compresses $in file to gz $out file
include "System";
$arr= array(1,2,3,4);
$text = serialize($arr);
file_put_contents("EgorBest.txt",$text);
echo "To da I'ma best!\n";
$text = file_get_contents("EgorBest.txt");
$arr = unserialize($text);
foreach ($arr as $number)
{
	echo "$number\n";
}
Console.readline();
?>
