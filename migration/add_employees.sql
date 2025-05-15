CREATE TABLE IF NOT EXISTS employees (
    id_employee INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(255) not null,
    email varchar(255) not null unique,
    position VARCHAR(20) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    id_adress INT NOT NULL,
    FOREIGN KEY (id_adress) REFERENCES adress(id_adress)
        ON DELETE CASCADE ON UPDATE CASCADE
);
