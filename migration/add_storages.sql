CREATE TABLE IF NOT EXISTS storages (
    id_storage INT AUTO_INCREMENT PRIMARY KEY,
    ingredient_count INT NOT NULL,
    storage_name VARCHAR(20) NOT NULL, -- zamrażalka, chłodnia, suchy
    shelf INT NOT NULL
);
