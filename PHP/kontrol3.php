<?php
// Step 25: Calculate the player's total score and check for rewards

// Player's collected points
$points = 550;

// Display player's total score
echo "Player's total score is: " . $points . "\n";

// Check if the player gets additional rewards
if ($points > 500) {
    echo "Do players get additional rewards? YES\n";
} else {
    echo "Do players get additional rewards? NO\n";
}
?>
