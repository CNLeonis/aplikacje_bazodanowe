
-- 1. ZŁOŻONY INDEKS na customers(name, email)
CREATE INDEX idx_customers_name_email ON customers(name, email);
-- sprawdzić obecność indeksu:
SHOW INDEXES FROM customers;
--przykładowe zapytanie:
SELECT * FROM customers
WHERE name = 'Anna Nowak' AND email = 'anna.nowak1234@wp.pl';

-- 2. "BITMAP-LIKE" INDEKS na orders(order_status)
-- (dla kolumny o małej liczbie unikalnych wartości)
CREATE INDEX idx_orders_status ON orders(order_status);

-- 3. FUNKCYJNY INDEKS na LOWER(email)
CREATE INDEX idx_lower_email ON customers((LOWER(email)));
