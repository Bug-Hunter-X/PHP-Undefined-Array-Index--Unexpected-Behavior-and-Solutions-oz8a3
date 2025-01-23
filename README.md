# PHP Undefined Array Index: Unexpected Behavior and Solutions

This repository demonstrates a common but often overlooked issue in PHP: accessing array elements using keys that do not exist.  While this might not always directly throw an error, it can result in unexpected behavior and unpredictable program output.

The `bug.php` file showcases this error.  The code attempts to access an array element with a key that is not defined; PHP's default behavior is to treat the value as null. In certain scenarios (like in arithmetic operations), null values might be treated as 0, leading to potentially subtle bugs.

The `bugSolution.php` file shows various solutions. The example uses `isset()` or the null-coalescing operator (`??`) to safely access array elements, ensuring that you handle cases where the key does not exist.

This is crucial for writing robust and reliable PHP code and preventing hard-to-debug issues.