<?php
require_once 'ExamplePrice.php'; 

$pageTitle = "Про нас";

ob_start(); 
?>

    <h1>Про щось</h1>
    <p>Вартість консультації: <?php echo formatPrice(500); ?></p>

<?php
$content = ob_get_clean();
include 'layout.php';
?>