create table if not exists customers (
    id serial primary key,
        name varchar(255) not null,
        email varchar(255) not null unique,
        phone varchar(20) not null,
        street varchar(255) not null,
        city varchar(255) not null,
        postal_code varchar(20) not null,
        order_status varchar(50) not null,
        order_date date not null,
        payment_method varchar(50) not null,
        pizza_size varchar(50) not null,
        pizza_type varchar(50) not null,
        pizza_crust varchar(50) not null,
        pizza_toppings varchar(255) not null,
        order_total decimal(10, 2) not null,
        order_id varchar(50) not null unique
    );
