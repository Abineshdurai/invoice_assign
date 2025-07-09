
# Laravel Invoice Assignment

This is a simple Laravel project for generating invoices and sending email notifications using **Events**, **Listeners**, and **Mailable** classes.

---

## Features

- Create invoices with client name, quantity, and tax
- Automatically calculate subtotal, tax, and total
- Send invoice email to the client
- Uses Laravel Events, Listeners, Mailables
- Queue support (can work with `sync` or `database` queue drivers)

---

## Setup Instructions
1. Clone repository: `git clone https://github.com/Abineshdurai/invoice_assign.git`
2. Install dependencies: `composer install`
3. Run migrations: `php artisan migrate`
4. Start queue worker: `php artisan queue:work`
5. Start server: `php artisan serve`
