<?php
class Student
{

    public $name;
    public $age;
    public $Grade;

    public function showinfo($n, $a, $g)
    {
        $this->name = $n;
        $this->age = $a;
        $this->Grade = $g;
        echo " Name: " . $n . "  \n";
        echo "<pre>";
        echo "</pre>";
        echo " Age:  " . $a . "  \n";
        echo "<pre>";
        echo "</pre>";
        echo " Grade: " . $g . "  \n";
        echo "<pre>";
        echo "</pre>";
    }
}

$Student1 = new Student();
$Student1->showinfo(" Moahmed ", " 18 ", " 4Grade ");
