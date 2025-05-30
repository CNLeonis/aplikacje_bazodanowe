CREATE TABLE IF NOT EXISTS adress (
    id_adress INT AUTO_INCREMENT PRIMARY KEY,
    city VARCHAR(30) NOT NULL,
    street VARCHAR(30) NOT NULL,
    house VARCHAR(10) NOT NULL,
    apartment VARCHAR(10) NOT NULL,
    postal_code VARCHAR(10) NOT NULL
);

create table if not exists customers (
    id_customer INT AUTO_INCREMENT primary key,
        name varchar(255) not null,
        email varchar(255) not null unique,
        phone varchar(20) not null
);

ALTER TABLE customers
ADD COLUMN adress_id INT,
ADD CONSTRAINT fk_customer_address FOREIGN KEY (adress_id) REFERENCES adress(id_adress)
    ON DELETE SET NULL ON UPDATE CASCADE;

create table if not exists deliveries (
    id_delivery integer AUTO_INCREMENT primary key,
    delivery_name varchar(20) not null,
    phone varchar(20) not null
);

ALTER TABLE deliveries
ADD COLUMN id_order INTEGER NOT NULL,
ADD CONSTRAINT fk_deliveries_order
    FOREIGN KEY (id_order) REFERENCES orders(id_order);

CREATE TABLE IF NOT EXISTS dishes (
    id_dish INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price DECIMAL(5,2) NOT NULL,
    ingredients VARCHAR(100),
    category VARCHAR(30)
);

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


CREATE TABLE IF NOT EXISTS ingredients (
    id_ingredient INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);


create table if not exists orders (
    id_order int AUTO_INCREMENT primary key,
        order_date date not null,
        order_status varchar(50) not null,
        order_type varchar(50) not null,
        customer_id integer not null references customers(id_customer)
        
    );

CREATE TABLE IF NOT EXISTS payments (
    id_payment INT AUTO_INCREMENT PRIMARY KEY,
    payment_method VARCHAR(20) NOT NULL,
    order_id INT NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id_order)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS reviews (
    id_review INT AUTO_INCREMENT PRIMARY KEY,
    customer_id INT NOT NULL,
    order_id INT NOT NULL,
    rating INT CHECK (rating BETWEEN 1 AND 5),
    comment TEXT,
    review_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (customer_id) REFERENCES customers(id_customer)
        ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (order_id) REFERENCES orders(id_order)
        ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS storages (
    id_storage INT AUTO_INCREMENT PRIMARY KEY,
    ingredient_count INT NOT NULL,
    storage_name VARCHAR(20) NOT NULL, -- zamrażalka, chłodnia, suchy
    shelf INT NOT NULL
);
