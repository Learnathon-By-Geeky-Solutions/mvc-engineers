
# Team Name:  mvc-engineers

## Team Members
- ftanvir (Team Leader)
- iamerfanahmed
- its-asif

## Mentor
- Amir-16
---
# Project Description
### Restaurant Management System (RMS)

This project is a **Restaurant Management System (RMS)** built using the **Laravel** framework. The application provides seamless management of restaurant operations, including menu management, table reservations, order processing, and more. It is fully containerized using **Docker** for ease of deployment and consistency across environments.

## Features

- **User Authentication**:
    - Admins can log in to manage the restaurant.
    - Customers can view the menu and make reservations.
- **Menu Management**:
    - Add, update, and delete menu items.
    - Categorize menu items for easy navigation.
- **Table Reservations**:
    - View available tables.
    - Book tables for customers.
    - Cancel or modify reservations.
- **Order Management**:
    - Create, update, and process customer orders.
    - Manage order status (pending, completed, etc.).
    - Print order details.
    - Send order notifications to the kitchen.
    - Stripe/PayPal integration for online payments.
    - Generate invoices for orders.
    - Apply discounts and promotions.
    - Track order history.
- **Analytics & Reports**:
    - View daily, weekly, and monthly sales reports.
    - Track popular menu items.
- **Kitchen Display**:
    - Display incoming orders in the kitchen.
    - Mark orders as completed.
- **Feedback & Reviews**:
    - Collect customer feedback and reviews.
    - Display reviews on the website.
- **Email and SMS Campaign**:
    - Send promotional emails and SMS to customers.
    - Notify customers of upcoming events and offers.

## Tech Stack ( TALL Stack )

- **Backend**: Laravel (PHP Framework)
- **Frontend**: LiveWire, Blade Templates, Tailwind, Alpine,
- **Database**: MySQL/PostgreSQL
- **Containerization**: Docker with Docker Compose
- **Server**: Nginx/Apache (configured within Docker)

## Prerequisites

Before running the application, ensure you have the following installed:

- Docker
- Docker Compose

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/restaurant-management-system.git
   cd restaurant-management-system
   ```

2. **Set Up Environment Variables**:
   Copy the `.env.example` file to `.env` and update the necessary values:
   ```bash
   cp .env.example .env
   ```

3. **Build and Start Containers**:
   Use Docker Compose to build and start the application:
   ```bash
   docker-compose up --build
   ```

4. **Run Migrations and Seeders**:
   Inside the application container, run the following commands to set up the database:
   ```bash
   docker-compose exec app php artisan migrate --seed
   ```

5. **Access the Application**:
   The application will be accessible at [http://localhost](http://localhost).

## Usage

- **Admin Panel**:
  Access the admin panel for managing restaurant operations.
- **Customer Interface**:
  Provide customers with a user-friendly interface for browsing the menu and making reservations.


## Testing

Run unit and feature tests with:
```bash
php artisan test
```

---
