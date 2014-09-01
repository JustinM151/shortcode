<?php
require_once 'shortcode.php';

$test = new shortcode;
//$test->reScramble();
$x = rand(1500,2590746); //Target INT
$y = array(rand(100,1890),rand(5000,10000),rand(25000,250000));
$ex = $test->encode_int($x);
$ey = $test->encode_int($y);

echo "TARGET INT: ".$x."<br />";
echo "TARGET ARRAY: ".print_r($y,1)."<br /><br />";
echo "ENCODED INT: ".$ex."<br />";
echo "DECODED INT: ".$test->decode_int($ex)."<br /><br />";
echo "ENCODED ARRAY: ".$ey."<br />";
echo "DECODED ARRAY: ".print_r($test->decode_int($ey),1);
?>
