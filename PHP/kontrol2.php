<?php
// Product price
$productPrice = 120000;

// Check if the price is eligible for a discount
if ($productPrice > 100000) {
    // Calculate discount
    $discount = 0.20 * $productPrice;
    // Calculate final price after discount
    $finalPrice = $productPrice - $discount;
} else {
    // No discount for prices less than or equal to 100,000
    $finalPrice = $productPrice;
}

// Display the final price to be paid
echo "The final price to be paid is: Rp " . number_format($finalPrice, 0, ',', '.') . "\n";
?>
