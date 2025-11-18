<?php
$page_title = "Artisan Coffee - Products Dashboard";
$page_description = "Interactive dashboard with product visualizations";
include 'includes/header.php';
?>

<main>
    <section class="page-header">
        <div class="container">
            <h1>📊 Products Dashboard</h1>
            <p>Product and catalog statistics visualization</p>
        </div>
    </section>

    <section class="dashboard-section">
        <div class="container">
            <!-- Quick Statistics -->
            <div class="row mb-4">
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="stat-card">
                        <div class="stat-icon">☕</div>
                        <div class="stat-content">
                            <h3 id="total-productos">-</h3>
                            <p>Total Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="stat-card">
                        <div class="stat-icon">💰</div>
                        <div class="stat-content">
                            <h3 id="precio-promedio">-</h3>
                            <p>Average Price</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="stat-card">
                        <div class="stat-icon">📦</div>
                        <div class="stat-content">
                            <h3 id="stock-total">-</h3>
                            <p>Total Stock</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart 1: Products by Category (Bars) -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h2>📊 Products by Category</h2>
                            <p class="chart-subtitle">Product distribution by category</p>
                        </div>
                        <div id="chart-categoria" class="chart-container"></div>
                    </div>
                </div>
            </div>

            <!-- Charts 2 and 3: Roast and Price -->
            <div class="row mb-4">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h2>🥧 Products by Roast Level (Pie Chart)</h2>
                            <p class="chart-subtitle">Percentage distribution by roast level</p>
                        </div>
                        <div id="chart-tostado" class="chart-container"></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="chart-card">
                        <div class="chart-header">
                            <h2>💰 Top 10 Products by Price</h2>
                            <p class="chart-subtitle">Most expensive products in the catalog</p>
                        </div>
                        <div id="chart-precio" class="chart-container"></div>
                    </div>
                </div>
            </div>

            <!-- Refresh Button -->
            <div class="row">
                <div class="col-12 text-center">
                    <button id="btn-refresh" class="btn btn-primary btn-lg">
                        🔄 Refresh Data
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Highcharts -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Dashboard JS -->
<script src="js/dashboard.js"></script>

<?php include 'includes/footer.php'; ?>