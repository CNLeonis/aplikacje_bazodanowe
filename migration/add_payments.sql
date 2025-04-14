CREATE TABLE IF NOT EXISTS payments (
    id_payment INT AUTO_INCREMENT PRIMARY KEY,
    payment_method VARCHAR(20) NOT NULL,
    order_order_id INT NOT NULL,
    FOREIGN KEY (order_id_order) REFERENCES orders(id_order)
    ON DELETE CASCADE ON UPDATE CASCADE
);