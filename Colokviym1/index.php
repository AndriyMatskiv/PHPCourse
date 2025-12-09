<?php

require_once 'db-connect.inc.php';
require_once 'controllers/CategoryController.php';

$categoryId = isset($_GET['id']) ? (int)$_GET['id'] : 1;

$controller = new CategoryController($pdo);
$data = $controller->show($categoryId);


extract($data); 
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Колоквіум: Завдання №1</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php if ($found && $category && is_object($category)): ?>
        
        <h1>Категорія: <?php echo htmlspecialchars($category->title); ?></h1>

        <div class="nav-links">
            <a href="?id=1">Електроніка</a> | <a href="?id=2">Одяг</a>
        </div>

        <?php if (count($products) > 0): ?>
            <div class="grid">
                <?php foreach ($products as $product): ?>
                    <div class="card">
                        <img src="uploads/<?php echo htmlspecialchars($product['image']); ?>" alt="Product">
                        
                        <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                        <span class="price">$<?php echo $product['price']; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="empty-message">Товарів немає.</p>
        <?php endif; ?>

    <?php else: ?>
        <h1>404 - Категорію не знайдено</h1>
        <a href="?id=1">На головну</a>
    <?php endif; ?>

</body>
</html>