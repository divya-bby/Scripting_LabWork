<?php
//A
$integerVar = 25;              
$floatVar = 12.5;              
$stringVar = "Hello, PHP!";    
$boolVar = true;               
$arrayVar = ["Apple", "Banana", "Cherry"]; 
$nullVar = null;               

echo "Using echo:\n";
echo "Integer: $integerVar\n";
echo "Float: $floatVar\n";
echo "String: $stringVar\n";
echo "Boolean: " . ($boolVar ? "true" : "false") . "\n";
echo "Null: " . ($nullVar === null ? "null" : $nullVar) . "\n";

echo "\nUsing print:\n";
print "Integer: $integerVar\n";
print "Float: $floatVar\n";
print "String: $stringVar\n";
print "Boolean: " . ($boolVar ? "true" : "false") . "\n";
print "Null: " . ($nullVar === null ? "null" : $nullVar) . "\n";

echo "\n";

// B
echo "Using print_r:\n";
print_r($arrayVar);

echo "\nUsing var_dump:\n";
var_dump($arrayVar);

echo "\n";

//  C
echo "Checking data types:\n";
echo "Is \$integerVar an integer? " . (is_int($integerVar) ? "Yes" : "No") . "\n";
echo "Is \$floatVar a float? " . (is_float($floatVar) ? "Yes" : "No") . "\n";
echo "Is \$stringVar a string? " . (is_string($stringVar) ? "Yes" : "No") . "\n";
echo "Is \$boolVar a boolean? " . (is_bool($boolVar) ? "Yes" : "No") . "\n";
echo "Is \$arrayVar an array? " . (is_array($arrayVar) ? "Yes" : "No") . "\n";
echo "Is \$nullVar null? " . (is_null($nullVar) ? "Yes" : "No") . "\n";
?>
