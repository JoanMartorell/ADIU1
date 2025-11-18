<?php
// Detectar la página actual para marcar el enlace activo
$current_page = basename($_SERVER['PHP_SELF']);
$pages = [
    'index.php' => 'Inicio',
    'productos.php' => 'Productos',
    'contacto.php' => 'Contacto'
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($page_title)): ?>
        <title><?php echo htmlspecialchars($page_title); ?></title>
    <?php else: ?>
        <title>Café Artesanal</title>
    <?php endif; ?>
    <?php if (isset($page_description)): ?>
        <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>☕ Café Artesanal</h1>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Inicio</a></li>
                    <li><a href="productos.php" class="<?php echo ($current_page == 'productos.php') ? 'active' : ''; ?>">Productos</a></li>
                    <li><a href="contacto.php" class="<?php echo ($current_page == 'contacto.php') ? 'active' : ''; ?>">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

