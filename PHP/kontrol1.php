<?php
// List of grades
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Step 1: Sort the list
sort($grades);

// Step 2: Remove 2 teratas and 2 dari bawah
$filtered_grades = array_slice($grades, 2, -2);

// menotal semua yang tersisa
$total = array_sum($filtered_grades);

// Display the result
echo "Total score used to determine the average grade: " . $total;
?>
