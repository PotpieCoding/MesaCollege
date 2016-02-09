```HTML+PHP
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variable Type Test</title>
</head>

<body>
<?php
/*
* Filename: testgettype.php
* Created by: Cecilia R. Mason
* PHP Summary: Testing the flexibility of variable data types using integers and strings.
*/

/* Initializing variables */
$set_type_int = 1; // Integer
$set_type_string = '"This is a string."'; // String

$test_type1 = 1; // Start as integer, change to string
$test_type2 = '"string"'; // Start as string, change to number
$test_zip1 = '12345'; // Start example zip code as string, try to change it to int
$test_zip2 = '12345-6789'; // Start a 9 digit zip code as string, try adding an int to it

/* Display */
print '<h1>Initialized Variables</h1>';
print '<strong>$set_type_int</strong> is ' . $set_type_int . ' and the variable type is ' . gettype($set_type_int) . '.<br>'; // Should be 'integer'
print '<strong>$set_type_string</strong> is ' . $set_type_string . ' and the variable type is ' . gettype($set_type_string) . '.<br>'; // Should be 'string'

print '<strong>$test_type1</strong> starts as ' . $test_type1 . ' and the variable type is ' . gettype($test_type1) . '.<br>'; // Should be 'integer'
print '<strong>$test_type2</strong> starts as ' . $test_type2 . ' and the variable type is ' . gettype($test_type2) . '.<br>'; // Should be 'string'
print '<strong>$test_zip1</strong> starts as ' . $test_zip1 . ' and the variable type is ' . gettype($test_zip1) . '.<br>'; // Should be 'string'
print '<strong>$test_zip2</strong> starts as ' . $test_zip2 . ' and the variable type is ' . gettype($test_zip2) . '.<br>'; // Should be 'string'

/* Change variables */
$test_type1 = $set_type_string; // Int to String
$test_type2 = $set_type_int; // String to Int
$test_zip1 = $test_zip1 + $set_type_int; // What happens when we add an integer to a string of numbers?
$test_zip2 = $test_zip2 + $set_type_int + $set_type_int; // What happens when we add an integer to a string with numbers and characters?
print '<br><em>Made changes to $test_type1, $test_type2, $test_zip1, and $test_zip2.</em><br><br>';

/* Display */
print '<h1>Final Variables</h1>';
print '<strong>$set_type_int</strong> is ' . $set_type_int . ' and the variable type is ' . gettype($set_type_int) . '.<br>'; // Should be 'integer'
print '<strong>$set_type_string</strong> is ' . $set_type_string . ' and the variable type is ' . gettype($set_type_string) . '.<br>'; // Should be 'string'

print '<strong>$test_type1</strong> ends up as ' . $test_type1 . ' and the variable type is ' . gettype($test_type1) . '.<br>'; // Should be 'string'
print '<strong>$test_type2</strong> ends up as ' . $test_type2 . ' and the variable type is ' . gettype($test_type2) . '.<br>'; // Should be 'integer'

// Will the test zip codes end up being 'integer' or 'string'?
print '<strong>$test_zip1</strong> ends up as ' . $test_zip1 . ' and the variable type is ' . gettype($test_zip1) . '.<br>';
print '<strong>$test_zip2</strong> ends up as ' . $test_zip2 . ' and the variable type is ' . gettype($test_zip2) . '.<br>';
?>

<p>For more information on string conversion to numbers, go to <a href="http://www.php.net/manual/en/language.types.string.php#language.types.string.conversion">this link.</a></p>
</body>
</html>
```
