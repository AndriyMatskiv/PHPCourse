<?php
function formatPrice(float $price): string {
    return number_format($price, 2, '.', ' ') . ' грн';
}

echo formatPrice(100.5);
echo"\t";
echo formatPrice(2500);