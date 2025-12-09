<?php
class Category {
    private $pdo;
    public $id;
    public $title;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }


    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM categories WHERE id = ?");
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        
        if ($data) {
            $this->id = $data['id'];
            $this->title = $data['title'];
            return true;
        }
        return false;
    }

    public function getProducts() {
        $sql = "SELECT * FROM products WHERE category_id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $this->id]);
        return $stmt->fetchAll();
    }
}