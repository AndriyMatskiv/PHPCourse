<?php
require_once 'ExamplePrice.php';
require_once 'TraitsExample/User.php';

$title = "Головна";
$currentUser = new User("Тарас");
$myId = $currentUser->generateUuid();
$price = formatPrice(1234.5);

$pageTitle = "Головна сторінка";

ob_start();
?>

    <h1>Вітаємо, <?php echo $currentUser->name; ?>!</h1>
    
    <div class="card">
        <h3>Ваші дані:</h3>
        <p>ID сесії: <code><?php echo $myId; ?></code></p>
        <p>Баланс: <strong><?php echo $price; ?></strong></p>
    </div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>