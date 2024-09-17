<?php
// Variables for total seats and occupied seats
$totalSeats = 45;
$occupiedSeats = 28;

// Calculate the number of empty seats
$emptySeats = $totalSeats - $occupiedSeats;

// Calculate the percentage of empty seats
$percentageEmpty = ($emptySeats / $totalSeats) * 100;

// Display the result
echo "Percentage of empty seats: " . number_format($percentageEmpty, 2) . "%";
?>
