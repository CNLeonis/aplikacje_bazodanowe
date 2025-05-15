create table if not exists customers (
    id_customer INT AUTO_INCREMENT primary key,
        name varchar(255) not null,
        email varchar(255) not null unique,
        phone varchar(20) not null
    );
