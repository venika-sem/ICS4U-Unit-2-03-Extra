<?php
require_once 'VenikaStack.php';

$fruits = new VenikaStack();
$fruits->push("apple");
$fruits->push("banana");
$fruits->push("cherry");
echo "fruits: " . $fruits->show() . "\n";
$topFruit = $fruits->pop();
$isEmpty = $fruits->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $isEmpty . "\n";
$size = $fruits->size();
echo "The size of the stack is: " . $size . "\n";
echo "popped fruit: " . $topFruit . "\n";
echo "fruits: " . $fruits->show() . "\n";
$isEmpty2 = $fruits->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $isEmpty2 . "\n";
$size2 = $fruits->size();
echo "The size of the stack is: " . $size2 . "\n\n";

$colours = new VenikaStack();
$colours->push("red");
$colours->push("blue");
echo "colours: " . $colours->show() . "\n";
$isEmpty3 = $colours->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $isEmpty3 . "\n";
$size3 = $colours->size();
echo "The size of the stack is: " . $size3 . "\n";
$topColour = $colours->pop();
echo "popped colour: " . $topColour . "\n";
echo "colours: " . $colours->show() . "\n";
$isEmpty4 = $colours->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $isEmpty4 . "\n";
$size4 = $colours->size();
echo "The size of the stack is: " . $size4 . "\n\n";

$animals = new VenikaStack();
echo "animals: " . $animals->show() . "\n";
$isEmpty5 = $animals->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $isEmpty5 . "\n";
$size5 = $animals->size();
echo "The size of the stack is: " . $size5 . "\n";
$topAnimal = $animals->pop();
echo "popped animal: " . $topAnimal . "\n";
echo "animals: " . $animals->show() . "\n";
$isEmpty6 = $animals->isEmpty() ? 'true' : 'false';
echo "Is the stack empty? " . $isEmpty6 . "\n";
$size6 = $animals->size();
echo "The size of the stack is: " . $size6 . "\n\n";

echo "Done.";
?>
