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
