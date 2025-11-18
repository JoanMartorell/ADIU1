<?php
$page_title = "Artisan Coffee - Add Product";
$page_description = "Add new coffee products to our catalog";
include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>➕ Add New Product</h1>
            <p>Complete the form to add a new product to the catalog</p>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h2>Product Information</h2>
                    <div class="info-item">
                        <div class="info-icon">☕</div>
                        <div class="info-text">
                            <h3>Catalog</h3>
                            <p>Added products will automatically appear on the products page.</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">📊</div>
                        <div class="info-text">
                            <h3>Dashboard</h3>
                            <p>Product data will be reflected in the visualization dashboard.</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon">✅</div>
                        <div class="info-text">
                            <h3>Validation</h3>
                            <p>All fields marked with * are required.</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <h2>Product Data</h2>
                    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                        <div class="alert-success">
                            <p>✅ Product added successfully! It's now available in the catalog.</p>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
                        <div class="alert-error">
                            <p>❌ Error adding product. Please try again.</p>
                            <?php if (isset($_GET['msg'])): ?>
                                <p class="error-message"><?php echo htmlspecialchars($_GET['msg']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <form class="contact-form" action="php/process_product.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Product Name *</label>
                            <input type="text" id="nombre" name="nombre" required placeholder="e.g.: Colombian Supremo">
                        </div>
                        <div class="form-group">
                            <label for="origen">Origin *</label>
                            <input type="text" id="origen" name="origen" required placeholder="e.g.: Colombia, Valle del Cauca">
                        </div>
                        <div class="form-group">
                            <label for="precio">Price (€) *</label>
                            <input type="number" id="precio" name="precio" step="0.01" min="0" required placeholder="e.g.: 12.50">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock *</label>
                            <input type="number" id="stock" name="stock" min="0" required placeholder="e.g.: 150">
                        </div>
                        <div class="form-group">
                            <label for="categoria">Category *</label>
                            <select id="categoria" name="categoria" required>
                                <option value="">Select a category</option>
                                <option value="Arabica">Arabica</option>
                                <option value="Robusta">Robusta</option>
                                <option value="Blend">Blend</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipo">Type *</label>
                            <input type="text" id="tipo" name="tipo" required placeholder="e.g.: Arabica">
                        </div>
                        <div class="form-group">
                            <label for="tostado">Roast Level *</label>
                            <select id="tostado" name="tostado" required>
                                <option value="">Select roast level</option>
                                <option value="Light">Light</option>
                                <option value="Medium">Medium</option>
                                <option value="Medium-Dark">Medium-Dark</option>
                                <option value="Dark">Dark</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Description *</label>
                            <textarea id="descripcion" name="descripcion" rows="5" required placeholder="Describe the characteristics and notes of the coffee..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Image Path</label>
                            <input type="text" id="imagen" name="imagen" placeholder="e.g.: imagenes/cafe1.png" value="imagenes/cafe1.png">
                            <small>Leave empty or use: imagenes/cafe1.png or imagenes/cafe2.png</small>
                        </div>
                        <button type="submit" class="btn-primary">➕ Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>

