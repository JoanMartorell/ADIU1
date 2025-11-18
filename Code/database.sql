-- Database for coffee products
-- Execute this script in phpMyAdmin or MySQL

CREATE DATABASE IF NOT EXISTS cafe_artesanal_db;
USE cafe_artesanal_db;

-- Products table
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    origen VARCHAR(100) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    categoria VARCHAR(50) NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    tostado VARCHAR(50) NOT NULL,
    descripcion TEXT,
    imagen VARCHAR(255) DEFAULT 'imagenes/cafe1.png',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert diverse coffee products
INSERT INTO productos (nombre, origen, precio, stock, categoria, tipo, tostado, descripcion, imagen) VALUES
('Colombian Supremo', 'Colombia, Valle del Cauca', 12.50, 150, 'Arabica', 'Arabica', 'Medium', 'Smooth coffee with notes of caramel, nuts and a citrus touch. Perfect for any time of day.', 'imagenes/cafe1.png'),
('Ethiopian Yirgacheffe', 'Ethiopia, Yirgacheffe', 14.90, 120, 'Arabica', 'Arabica', 'Light', 'Floral and fruity coffee with notes of bergamot and jasmine. A classic Ethiopian with unique flavor.', 'imagenes/cafe2.png'),
('Guatemalan Antigua', 'Guatemala, Antigua', 13.75, 100, 'Arabica', 'Arabica', 'Medium-Dark', 'Complex coffee with notes of chocolate, spices and a full body. Ideal for espresso.', 'imagenes/cafe1.png'),
('Kenya AA', 'Kenya, Nyeri', 15.50, 80, 'Arabica', 'Arabica', 'Medium', 'Bright and acidic coffee with notes of blackcurrant and lemon. Perfect for filter methods.', 'imagenes/cafe2.png'),
('Brazilian Cerrado', 'Brazil, Cerrado Mineiro', 11.90, 200, 'Arabica', 'Arabica', 'Medium', 'Sweet and smooth coffee with notes of chocolate and hazelnut. Excellent for blends or solo.', 'imagenes/cafe1.png'),
('Sumatra Mandheling', 'Indonesia, Sumatra', 13.25, 90, 'Arabica', 'Arabica', 'Dark', 'Intense and earthy coffee with notes of spices and a heavy body. Ideal for strong coffee lovers.', 'imagenes/cafe2.png'),
('Costa Rica Tarrazú', 'Costa Rica, Tarrazú', 14.00, 110, 'Arabica', 'Arabica', 'Medium', 'Balanced coffee with notes of orange, honey and a clean finish. Great for pour-over.', 'imagenes/cafe1.png'),
('Peruvian Organic', 'Peru, Chanchamayo', 12.75, 130, 'Arabica', 'Arabica', 'Light', 'Organic coffee with notes of apple, caramel and a mild acidity. Certified organic.', 'imagenes/cafe2.png'),
('Honduran Marcala', 'Honduras, Marcala', 11.50, 180, 'Arabica', 'Arabica', 'Medium', 'Sweet coffee with notes of vanilla, brown sugar and a creamy body. Great value.', 'imagenes/cafe1.png'),
('Nicaraguan Jinotega', 'Nicaragua, Jinotega', 13.00, 95, 'Arabica', 'Arabica', 'Medium-Dark', 'Rich coffee with notes of cocoa, almond and a smooth finish. Perfect for morning.', 'imagenes/cafe2.png'),
('Tanzanian Peaberry', 'Tanzania, Mount Kilimanjaro', 16.25, 70, 'Arabica', 'Arabica', 'Light', 'Rare peaberry coffee with notes of wine, berries and a bright acidity. Unique and special.', 'imagenes/cafe1.png'),
('Mexican Chiapas', 'Mexico, Chiapas', 11.25, 160, 'Arabica', 'Arabica', 'Medium', 'Mild coffee with notes of nuts, chocolate and a clean cup. Great for everyday drinking.', 'imagenes/cafe2.png'),
('Vietnamese Robusta', 'Vietnam, Central Highlands', 9.50, 250, 'Robusta', 'Robusta', 'Dark', 'Strong and bold coffee with high caffeine content. Perfect for espresso blends.', 'imagenes/cafe1.png'),
('Indian Monsoon Malabar', 'India, Malabar Coast', 12.00, 140, 'Arabica', 'Arabica', 'Medium-Dark', 'Unique monsoon-processed coffee with notes of spice, earth and low acidity. Distinctive flavor.', 'imagenes/cafe2.png'),
('Jamaican Blue Mountain', 'Jamaica, Blue Mountains', 28.00, 45, 'Arabica', 'Arabica', 'Medium', 'Premium coffee with notes of nuts, chocolate and a mild, smooth flavor. One of the world\'s finest.', 'imagenes/cafe1.png');
