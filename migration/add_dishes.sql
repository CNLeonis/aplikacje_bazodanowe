CREATE TABLE IF NOT EXISTS dishes (
    id_dish INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price DECIMAL(5,2) NOT NULL,
    ingredients VARCHAR(100),
    category VARCHAR(30)
);
