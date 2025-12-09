<?php

require_once __DIR__ . '/../models/CategoryModel.php';

class CategoryController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function show($id) {
        $category = new Category($this->pdo);
        $products = [];
        $found = $category->find($id);

        if ($found) {
            $products = $category->getProducts();
        }

        return [
            'category' => $category, 
            'products' => $products, 
            'found'    => $found
        ];
    }
}