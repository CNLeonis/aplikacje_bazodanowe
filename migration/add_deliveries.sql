create table if not exists deliveries (
    id_delivery integer AUTO_INCREMENT primary key,
    delivery_name varchar(20) not null,
    phone varchar(20) not null
);