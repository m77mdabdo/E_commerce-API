# 🛍️ Uniq Style  

**Uniq Style** is a modern e-commerce web application where users can explore and purchase a wide variety of products including clothes, bags, shoes, and watches.  
The project is built with a focus on **scalability**, **security**, and a seamless **shopping experience**.  

---

## 🚀 Features  

### 👤 For Users  
- Browse all available products (clothes, bags, shoes, watches, etc.).  
- Add products to **Favorites** and **Wishlist**.  
- Leave product **comments** (after signing in).  
- Contact Admin via integrated **SMS system**.  
- Secure payments with **Stripe Integration**.  

### 🛠️ For Admin (Corona Admin Dashboard)  
- Full control over products (**add, edit, delete, update**).  
- Manage all users and orders from the dashboard.  
- Monitor activities in real-time with a clean and modern **Corona Admin Dashboard**.  

---

## 🛠️ Tech Stack  
- **Backend**: Laravel 12 (PHP 8.2)  
- **Frontend**: Blade Templates, Bootstrap 5, JavaScript  
- **Database**: MySQL  
- **Authentication**: Laravel Breeze / Passport (depending on your setup)  
- **Payment Gateway**: Stripe Integration  
- **SMS Integration**: Third-party SMS service (e.g., Twilio / Local Provider)  
- **Admin Panel**: Corona Admin  

---

## Install dependencies: 
composer install
npm install && npm run dev



## Set up environment file:
cp .env.example .env
php artisan key:generate


## Configure database in .env, then run migrations & seeders: 
php artisan migrate --seed


## 🔑 User Roles

Guest: Can browse products and view details.

User: Can add products to favorites/wishlist, comment on products, and contact admin.

Admin: Has full privileges to manage products, users, and orders via Corona Admin Dashboard.
  

## 📌 Installation  

Clone the repository:  
```bash
git clone https://github.com/m77mdabdo/E_commerce-api
cd uniq-style



