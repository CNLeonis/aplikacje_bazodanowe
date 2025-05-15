CREATE TABLE IF NOT EXISTS reviews (
    id_review INT AUTO_INCREMENT PRIMARY KEY,
    id_customer INT NOT NULL,
    id_order INT NOT NULL
);


-- 1. Dodaj kolumny (jeśli jeszcze nie istnieją)
ALTER TABLE reviews 
    ADD COLUMN rating INT,
    ADD COLUMN comment TEXT,
    ADD COLUMN review_date DATETIME DEFAULT CURRENT_TIMESTAMP;


ALTER TABLE reviews MODIFY COLUMN id_customer INT UNSIGNED NOT NULL;
ALTER TABLE reviews MODIFY COLUMN id_order INT UNSIGNED NOT NULL;

ALTER TABLE reviews 
    ADD CONSTRAINT fk_customer_review 
    FOREIGN KEY (id_customer) REFERENCES customers(id_customer)
    ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE reviews 
    ADD CONSTRAINT fk_order_review 
    FOREIGN KEY (id_order) REFERENCES orders(id_order)
    ON DELETE CASCADE ON UPDATE CASCADE;

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
