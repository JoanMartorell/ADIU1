<?php
require_once 'api/config.php';

$page_title = "Artisan Coffee - Products";
$page_description = "Discover our selection of artisan single-origin coffees";
include 'includes/header.php';

// Get products from database
try {
    $conn = getDBConnection();
    $query = "SELECT * FROM productos ORDER BY fecha_creacion DESC";
    $result = $conn->query($query);
    $productos = [];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $productos[] = $row;
        }
    }
    $conn->close();
} catch (Exception $e) {
    $productos = [];
    $error = "Error loading products: " . $e->getMessage();
}
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>Our Products</h1>
            <p>Explore our selection of premium single-origin coffees</p>
        </div>
    </section>

    <section class="products">
        <div class="container">
            <?php if (isset($error)): ?>
                <div class="alert-error alert-error-margin">
                    <p><?php echo htmlspecialchars($error); ?></p>
                </div>
            <?php endif; ?>

            <?php if (empty($productos)): ?>
                <div class="empty-state">
                    <p>No products available yet.</p>
                    <a href="add_product.php" class="btn-primary">➕ Add First Product</a>
                </div>
            <?php else: ?>
                <div class="products-grid">
                    <?php foreach ($productos as $producto): ?>
                        <div class="product-card">
                            <div class="product-image">
                                <img src="<?php echo htmlspecialchars($producto['imagen']); ?>"
                                    alt="<?php echo htmlspecialchars($producto['nombre']); ?>"
                                    class="product-img"
                                    onerror="this.src='imagenes/cafe1.png'">
                            </div>
                            <div class="product-info">
                                <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
                                <p class="product-origin">Origin: <?php echo htmlspecialchars($producto['origen']); ?></p>
                                <p class="product-description"><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                                <div class="product-details">
                                    <span class="product-type">Type: <?php echo htmlspecialchars($producto['tipo']); ?></span>
                                    <span class="product-roast">Roast: <?php echo htmlspecialchars($producto['tostado']); ?></span>
                                </div>
                                <div class="product-price">€<?php echo number_format($producto['precio'], 2); ?> / 250g</div>
                                <div class="product-stock">
                                    Stock: <?php echo $producto['stock']; ?> units
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="brewing-tips">
        <div class="container">
            <h2>Brewing Tips</h2>
            <div class="tips-grid">
                <div class="tip-card">
                    <h3>🌡️ Temperature</h3>
                    <p>The ideal water temperature is between 90-96°C to extract the best flavors.</p>
                </div>
                <div class="tip-card">
                    <h3>⏱️ Time</h3>
                    <p>Extraction time varies by method: 2-4 minutes for filter, 25-30 seconds for espresso.</p>
                </div>
                <div class="tip-card">
                    <h3>💧 Ratio</h3>
                    <p>We recommend a ratio of 1:15 to 1:17 (coffee:water) for filter methods.</p>
                </div>
                <div class="tip-card">
                    <h3>🔄 Freshness</h3>
                    <p>Grind coffee just before brewing to get maximum flavor and aroma.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

