# 📦 Simple SFA API (Laravel 12)

Simple SFA (Sales Force Automation) API built with **Laravel 12**.  
This API is designed to provide backend services for mobile/web applications such as customer management, order handling, and reporting.

---

## 🚀 Requirements

- PHP >= 8.2  
- Composer >= 2.x  
- Laravel 12.x  
- MySQL
- Node.js & NPM (for frontend assets if required)

---

## ⚙️ Installation

1. Clone the repository

   git clone https://github.com/KevinAWijaya/simple_sfa.git  
   cd simple_sfa

2. Install dependencies

   composer install

3. Setup environment

   cp .env.example .env  
   php artisan key:generate

   Configure database in `.env`:

   DB_CONNECTION=mysql  
   DB_HOST=127.0.0.1  
   DB_PORT=3306  
   DB_DATABASE=dbo  
   DB_USERNAME=root  
   DB_PASSWORD=

5. Start development server

   php artisan serve

   App will be available at: http://127.0.0.1:8000

---

## 🧩 Features

- Laravel 12.x (latest)  
- RESTful API for Sales Force Automation  
- Build for [simple_sfa_mobile](https://github.com/KevinAWijaya/simple_sfa_mobile)  

---

## 🛠️ Development Notes

- Run tests

  php artisan test

- Clear cache

  php artisan config:clear  
  php artisan cache:clear  
  php artisan route:clear  
  php artisan view:clear

---

## 🤝 Contributing

1. Fork this project  
2. Create your feature branch (`git checkout -b feature/amazing-feature`)  
3. Commit changes (`git commit -m 'Add amazing feature'`)  
4. Push to branch (`git push origin feature/amazing-feature`)  
5. Open a Pull Request  

---

## 📜 License

This project is licensed under my concern

This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.
