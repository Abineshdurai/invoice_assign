# Project Title: 

Invoice Generator with Event-Based Email Notification and Queue Handling

----

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
3.Set `CACHE_STORE=file` in the .env file instead of using `database`
4. Run migrations: `php artisan migrate`
5. Start queue worker: `php artisan queue:work`
6. Start server: `php artisan serve`
7. After submitting the invoice form, Laravel dispatches a mail job to the queue.
To process and send the email, run the following command: `php artisan queue:work`
