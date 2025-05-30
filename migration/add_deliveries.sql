create table if not exists deliveries (
    id_delivery integer AUTO_INCREMENT primary key,
    delivery_name varchar(20) not null,
    phone varchar(20) not null
);

ALTER TABLE deliveries
ADD COLUMN id_order INTEGER NOT NULL,
ADD CONSTRAINT fk_deliveries_order
    FOREIGN KEY (id_order) REFERENCES orders(id_order);