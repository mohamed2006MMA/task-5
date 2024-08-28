<?php

class Math {
    public static function add($a, $b) {
        return $a + $b;
    }

    
    public static function subtract($a, $b) {
        return $a - $b;
    }

  
    public static function multiply($a, $b) {
        return $a * $b;
    }

    public static function divide($a, $b) {
        if ($b == 0) {
            return "Error: Division by zero.";
        }
        return $a / $b;
    }
}

echo "Addition: " . Math::add(10, 5) . "\n";         
echo "Subtraction: " . Math::subtract(10, 5) . "\n"; 
echo "Multiplication: " . Math::multiply(10, 5) . "\n"; 
echo "Division: " . Math::divide(10, 5) . "\n";     
echo "Division by zero: " . Math::divide(10, 0) . "\n"; 
?>

