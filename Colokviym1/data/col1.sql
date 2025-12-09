CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL
);

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2),
    image VARCHAR(255) DEFAULT 'no-image.jpg',
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE
);

INSERT INTO categories (title) VALUES ('Електроніка'), ('Одяг');

INSERT INTO products (category_id, name, price, image) VALUES 
(1, 'iPhone 15', 999.00, 'apple-iphone-15-plus-04.jpg'),
(1, 'Samsung TV', 500.00, 'samsung.jpg'),
(2, 'Джинси', 40.00, 'jeans.jpg');