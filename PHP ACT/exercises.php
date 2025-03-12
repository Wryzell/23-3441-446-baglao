<?php

$a = 15;
$b = 7;

echo "<h2>Exercise 1: Variables and Operators</h2>";
echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b) . "<br><br>";


$number = 10;  
echo "<h2>Exercise 2: Conditional Statements</h2>";

echo "<b>Check if number is even or odd:</b><br>";
if ($number % 2 == 0) {
    echo "$number is even.<br>";
} else {
    echo "$number is odd.<br>";
}

echo "<b>Check if number is positive, negative, or zero:</b><br>";
if ($number > 0) {
    echo "$number is positive.<br>";
} elseif ($number < 0) {
    echo "$number is negative.<br>";
} else {
    echo "$number is zero.<br>";
}
echo "<br>";

echo "<h2>Exercise 3: Loops</h2>";

echo "<b>FizzBuzz (1 to 100):</b><br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    } else {
        echo $i . "<br>";
    }
}

echo "<br><b>Fibonacci sequence (even numbers only):</b><br>";
$fib1 = 0;
$fib2 = 1;
for ($i = 0; $i < 10; $i++) {
    $fib3 = $fib1 + $fib2;
    if ($fib3 % 2 == 0) {
        echo $fib3 . "<br>";
    }
    $fib1 = $fib2;
    $fib2 = $fib3;
}
echo "<br>";

echo "<h2>Exercise 4: Functions</h2>";

function greet($name) {
    return "Hello, $name!";
}

function square($number) {
    return $number * $number;
}

echo "<b>Greeting Function:</b> " . greet("John") . "<br>";
echo "<b>Square Function:</b> The square of 4 is: " . square(4) . "<br><br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $submittedText = htmlspecialchars($_POST['textInput']);  

    echo "<h2>Exercise 5: Form Handling</h2>";
    echo "<h3>You submitted:</h3>";
    echo "<p>" . $submittedText . "</p>";
} else {
    echo "<h2>Exercise 5: Form Handling</h2>";
    echo '
    <form action="" method="post">
        <label for="textInput">Enter Text:</label>
        <input type="text" id="textInput" name="textInput" required>
        <input type="submit" value="Submit">
    </form>';
}
?>
