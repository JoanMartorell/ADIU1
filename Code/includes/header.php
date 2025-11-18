<?php
// Detect current page to mark active link
$current_page = basename($_SERVER['PHP_SELF']);
$pages = [
    'index.php' => 'Home',
    'products.php' => 'Products',
    'add_product.php' => 'Add Product',
    'dashboard.php' => 'Dashboard'
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($page_title)): ?>
        <title><?php echo htmlspecialchars($page_title); ?></title>
    <?php else: ?>
        <title>Artisan Coffee</title>
    <?php endif; ?>
    <?php if (isset($page_description)): ?>
        <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <?php endif; ?>
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>☕ Artisan Coffee</h1>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
                    <li><a href="products.php" class="<?php echo ($current_page == 'products.php') ? 'active' : ''; ?>">Products</a></li>
                    <li><a href="add_product.php" class="<?php echo ($current_page == 'add_product.php') ? 'active' : ''; ?>">➕ Add</a></li>
                    <li><a href="dashboard.php" class="<?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">📊 Dashboard</a></li>
                </ul>
            </nav>
        </div>
    </header>