CREATE TABLE IF NOT EXISTS adress (
    id_adress INT AUTO_INCREMENT PRIMARY KEY,
    city VARCHAR(30) NOT NULL,
    street VARCHAR(30) NOT NULL,
    house VARCHAR(10) NOT NULL,
    apartment VARCHAR(10) NOT NULL,
    postal_code VARCHAR(10) NOT NULL
);
