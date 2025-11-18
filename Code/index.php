<?php
$page_title = "Artisan Coffee - Home";
$page_description = "Artisan Coffee - Discover the best single-origin coffee, artisanally roasted";
include 'includes/header.php';
?>

<main>
    <section class="hero">
        <div class="hero-content">
            <div class="hero-image">
                <img src="imagenes/cafe1.png" alt="Artisan Coffee" class="hero-img">
            </div>
            <div class="hero-text">
                <h2>The Art of Coffee</h2>
                <p>Discover unique flavors of single-origin coffee, artisanally roasted for an unforgettable experience</p>
                <a href="products.php" class="btn-primary">Explore Products</a>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <div class="about-content">
                <div class="about-text">
                    <div class="about-image">
                        <img src="imagenes/cafe2.png" alt="Artisan coffee process" class="about-img">
                    </div>
                    <p>At <strong>Artisan Coffee</strong>, we are dedicated to selecting the best coffee beans from different regions around the world. Each batch is carefully hand-roasted, preserving the unique flavors and characteristic notes of each origin.</p>
                    <p>Our passion for coffee is reflected in every cup we prepare. We work directly with local producers, ensuring sustainable practices and fair trade.</p>
                </div>
                <div class="about-stats">
                    <div class="stat-item">
                        <h3>15+</h3>
                        <p>Unique Origins</p>
                    </div>
                    <div class="stat-item">
                        <h3>500+</h3>
                        <p>Satisfied Customers</p>
                    </div>
                    <div class="stat-item">
                        <h3>100%</h3>
                        <p>Artisan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2>Why Choose Us?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🌱</div>
                    <h3>Sustainable</h3>
                    <p>We work with producers who use sustainable and environmentally friendly agricultural practices.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🔥</div>
                    <h3>Artisan Roasting</h3>
                    <p>Each batch is hand-roasted in small lots, guaranteeing maximum quality and freshness.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🌍</div>
                    <h3>Single Origin</h3>
                    <p>We select beans from the best coffee-growing regions in the world, each with its distinctive flavor.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">❤️</div>
                    <h3>Fair Trade</h3>
                    <p>We support local producers by paying fair prices and promoting the development of their communities.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="process">
        <div class="container">
            <h2>Our Process</h2>
            <div class="process-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Selection</h3>
                    <p>We carefully choose the best beans from each origin</p>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Roasting</h3>
                    <p>We artisanally roast in small batches to preserve flavor</p>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Packaging</h3>
                    <p>We vacuum pack to maintain freshness and aroma</p>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Delivery</h3>
                    <p>We bring coffee directly to your door, fresh and ready to enjoy</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>