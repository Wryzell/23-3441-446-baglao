<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\n";
    } elseif ($i % 5 == 0) {
        echo "Buzz\n";
    } else {
        echo $i . "\n";
    }
}

$fib1 = 0;
$fib2 = 1;
for ($i = 0; $i < 10; $i++) {
    $fib3 = $fib1 + $fib2;
    if ($fib3 % 2 == 0) {
        echo $fib3 . "\n";
    }
    $fib1 = $fib2;
    $fib2 = $fib3;
}
?>
