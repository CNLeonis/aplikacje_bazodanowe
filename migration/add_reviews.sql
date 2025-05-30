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
