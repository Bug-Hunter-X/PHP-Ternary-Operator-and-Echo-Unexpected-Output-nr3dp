The solution involves explicitly assigning the result of the ternary operator to a variable before echoing it. This ensures the correct value is displayed, avoiding the unexpected evaluation within the echo statement.  This approach also improves code readability and maintainability.

```php
<?php
$value = 10;
$output = $value > 5 ? 'Value is ' . $value : 'Value is less than 5';
echo $output;
?>
```

Alternatively, parentheses can be used to enforce the desired order of operations, but the explicit assignment approach is generally recommended for better clarity.

```php
<?php
$value = 10;
echo ($value > 5 ? 'Value is ' . $value : 'Value is less than 5');
?>
```