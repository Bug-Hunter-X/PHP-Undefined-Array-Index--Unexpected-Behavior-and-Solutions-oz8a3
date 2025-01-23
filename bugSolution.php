```php
<?php
$myArray = ['a' => 1, 'b' => 2];

//Improved solution using isset()
$cValue = isset($myArray['c']) ? $myArray['c'] : 0; // Use the ternary operator for conditional assignment
$result = $cValue + 5; // Now the result will be 5 if 'c' is not defined

//Alternative solution using null coalescing operator (PHP 7+)
$cValue = $myArray['c'] ?? 0; // Use the null coalescing operator
$result2 = $cValue + 5; // Now the result will be 5 if 'c' is not defined

echo "Result (isset): " . $result . "\n";
echo "Result (null coalescing): " . $result2 . "\n";

//Check if key exists before accessing it
if (array_key_exists('a', $myArray)){
  echo "a exists and its value is: " . $myArray['a'] . "\n";
}
?>
```