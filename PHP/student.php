<?php
// Step 26: Calculate and display students with grades above class average

// Array of students with their grades
$students = [
    ["name" => "Alice", "grade" => 85],
    ["name" => "Bob", "grade" => 92],
    ["name" => "Charlie", "grade" => 78],
    ["name" => "David", "grade" => 64],
    ["name" => "Eva", "grade" => 90]
];

// Calculate the total grades and the number of students
$totalGrades = 0;
$studentCount = count($students);

foreach ($students as $student) {
    $totalGrades += $student["grade"];
}

// Calculate the class average
$classAverage = $totalGrades / $studentCount;

// Display the class average
echo "Class average is: " . $classAverage . "\n";

// Display students who scored above the average
echo "Students with grades above the class average:\n";
foreach ($students as $student) {
    if ($student["grade"] > $classAverage) {
        echo $student["name"] . " - " . $student["grade"] . "\n";
    }
}
?>
