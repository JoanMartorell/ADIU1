# Artisan Coffee - Web Project

## Project Description

Artisan Coffee is a complete web application combining front-end and back-end technologies. The project features a thematic website about artisan coffee with product management, data visualization dashboard, and dynamic content integration.

The application allows users to:
- Browse a catalog of artisan coffee products
- Add new products to the database
- View interactive data visualizations and statistics
- Experience a responsive design across all devices

## Technologies Used

### Frontend
- **HTML5** - Semantic markup
- **CSS** - Modular stylesheets with CSS variables, Flexbox, and Grid
- **JavaScript** - Fetch API for asynchronous data loading
- **Bootstrap** - Responsive framework
- **Highcharts** - Interactive charts and data visualization
- **jQuery 3.7.1** - DOM manipulation and event handling

### Backend
- **PHP** - Server-side scripting
- **MySQL/MariaDB** - Relational database management
- **RESTful API** - JSON endpoints for data retrieval

### Development Tools
- **XAMPP** - Local development environment (Apache + MySQL)

## Project Structure

```
Code/
├── api/                      # REST API Endpoints
│   ├── config.php           # Database configuration
│   ├── products_category.php # API: Products by category
│   ├── products_roast.php    # API: Products by roast level
│   └── products_price.php    # API: Products by price
│
├── css/                      # CSS Stylesheets
│   ├── variables.css        # CSS variables
│   ├── base.css             # Base styles and reset
│   ├── layout.css           # Header, footer, navigation
│   ├── components.css       # Reusable components
│   ├── pages.css            # Page-specific styles
│   ├── dashboard.css        # Dashboard styles
│   └── responsive.css       # Media queries
│
├── database/                 # Database scripts
│   └── database.sql          # SQL script with table and sample data
│
├── includes/                 # Reusable components
│   ├── header.php           # Header with navigation
│   └── footer.php           # Site footer
│
├── js/                      # JavaScript files
│   └── dashboard.js         # Dashboard logic with charts
│
├── php/                     # PHP processors/controllers
│   └── process_product.php  # Product form processor
│
├── imagenes/                # Images
│   ├── cafe1.png           # Coffee image 1
│   └── cafe2.png           # Coffee image 2
│
├── index.php                # Home page
├── products.php             # Products catalog page
├── add_product.php          # Add product form page
└── dashboard.php            # Data visualization dashboard
```
