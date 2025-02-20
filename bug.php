This code snippet demonstrates a common error in PHP related to the usage of the ternary operator and variable assignment within an echo statement.  The issue stems from PHP's loose typing and operator precedence. The intended behavior is to display 'Value is 10', but due to the order of operations and the implicit type conversion, it produces an unexpected output.  Specifically, the ternary operator's result is directly echoed without proper variable assignment, causing the expression itself to be evaluated and displayed, not the intended variable.

```php
<?php
$value = 10;
echo $value > 5 ? 'Value is ' . $value : 'Value is less than 5';
?>
```