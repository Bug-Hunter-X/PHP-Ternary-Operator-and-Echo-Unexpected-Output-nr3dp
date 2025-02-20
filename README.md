# PHP Ternary Operator and Echo Unexpected Output

This repository demonstrates a subtle but common error in PHP related to the usage of the ternary operator within an echo statement.  The problem arises from the combination of PHP's loose typing, operator precedence, and the way the ternary operator is evaluated within an echo statement.

The provided `bug.php` file shows the erroneous code, while `bugSolution.php` offers a corrected version.

This issue is relevant for developers working with PHP and highlights the importance of understanding operator precedence and potential type-related pitfalls.