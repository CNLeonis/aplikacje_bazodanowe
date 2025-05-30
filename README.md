# 🍕 Pizza Hut – System Generowania Danych (PHP + MySQL)

Aplikacja webowa służąca do generowania i analizy danych w relacyjnej bazie danych dla restauracji Pizza Hut.

## 📖 Opis

Projekt umożliwia:

- Generowanie losowych danych do bazy (klienci, zamówienia, dostawy, adresy, dania itd.)
- Analizę zapytań SQL i działania indeksów
- Przeglądanie wygenerowanych danych w formie tabel HTML

Stworzony w ramach przedmiotu **Aplikacje Bazodanowe** (semestr 6, 2025)

---

## ⚙️ Wymagania

- PHP 8.x
- MySQL 8.0+
- XAMPP / WAMP / MAMP (lokalny serwer)
- Przeglądarka (Chrome / Firefox)

---

## 💾 Instalacja i uruchomienie

1. Umieść projekt w `htdocs` (`E:\xampp\htdocs\pizza-hut`)
2. Importuj strukturę bazy danych z plików `add_*.sql`
3. Ustaw połączenie z bazą w `db.php`
4. Uruchom projekt w terminalu:
   `php -S localhost:8888`

---

## 🧪 Moduły generatora

- 👤 `generateCustomers.php` – generuje klientów
- 🏠 `generateAdress.php` – generuje adresy
- 🍕 `generateDishes.php` – generuje dania (pizze, makarony, napoje)
- 💰 `generatePayments.php` – przypisuje płatności do zamówień
- 🚚 `generateDeliveries.php` – przypisuje dostawców do dostaw
- 🧾 `generateOrders.php` – generuje zamówienia
- 👨‍🍳 `generateEmployees.php` – tworzy pracowników
- 🗣️ `generateReviews.php` – tworzy opinie klientów
- 📦 `generateStorages.php` – dane magazynowe
- 🧂 `generateIngredients.php` – lista składników

Każdy generator dostępny przez `form.php`.

---

## 📊 Indeksy i analiza

Zastosowano 3 typy indeksów:

- 🔍 Złożony: `(name, email)` w `customers`
- 🧠 Funkcyjny: `LOWER(email)` _(MySQL 8+)_
- 📌 Indeks prosty: `order_status` w `orders`

W `analyze.sql` opis porównań wydajności zapytań przed/po indeksowaniu.

## 📁 Struktura katalogów

/functions → funkcje losujące dane
/generate → skrypty generujące dane
/show → widoki danych
/sql → pliki do tworzenia tabel
/form.php → formularze generowania
/index.php → główne menu

---

## 👨‍💻 Autor

Dewid Bielecki  
`Pizza Hut Data Project – 2025`  
Wydział Informatyki, Semestr 6

---
