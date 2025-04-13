create table if not exists orders (
    id_order int AUTO_INCREMENT primary key,
        order_date date not null,
        status varchar(50) not null,
        customer_id integer not null references customers(id_customer)
        
    );