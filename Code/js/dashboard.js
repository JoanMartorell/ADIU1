// Dashboard JavaScript - Product charts handling
// Using Fetch API to get data from PHP endpoints

// Global variables
let chartCategoria, chartTostado, chartPrecio;

// Initialize dashboard when DOM is ready
document.addEventListener("DOMContentLoaded", function () {
  loadAllData();

  // Event listener for refresh button
  document.getElementById("btn-refresh").addEventListener("click", function () {
    loadAllData();
  });
});

// Main function to load all data
function loadAllData() {
  loadProductsByCategory();
  loadProductsByRoast();
  loadProductsByPrice();
}

// ============================================
// Load products by category data
// ============================================
function loadProductsByCategory() {
  fetch("api/products_category.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        updateStatistics(data);
        createCategoryChart(data.data);
      } else {
        console.error("Error loading products by category:", data.error);
      }
    })
    .catch((error) => {
      console.error("Error in products by category request:", error);
      showError("chart-categoria", "Error loading data");
    });
}

// Create bar chart - Products by category
function createCategoryChart(data) {
  const categories = data.map((item) => item.categoria);
  const quantities = data.map((item) => item.cantidad);

  chartCategoria = Highcharts.chart("chart-categoria", {
    chart: {
      type: "bar",
      backgroundColor: "transparent",
    },
    title: {
      text: "",
    },
    xAxis: {
      categories: categories,
      title: {
        text: null,
      },
    },
    yAxis: {
      min: 0,
      title: {
        text: "Number of Products",
        align: "high",
      },
      labels: {
        overflow: "justify",
      },
    },
    tooltip: {
      pointFormat:
        "<b>{point.y}</b> products<br/>Average price: <b>{point.precio_promedio} €</b>",
      formatter: function () {
        const item = data.find((d) => d.categoria === this.point.category);
        return (
          `<b>${this.point.category}</b><br/>` +
          `Products: <b>${this.point.y}</b><br/>` +
          `Average price: <b>${item ? item.precio_promedio : 0} €</b>`
        );
      },
    },
    plotOptions: {
      bar: {
        dataLabels: {
          enabled: true,
          format: "{y}",
        },
        color: "#6F4E37",
      },
    },
    series: [
      {
        name: "Products",
        data: quantities.map((quantity, index) => ({
          y: quantity,
          precio_promedio: data[index].precio_promedio,
        })),
      },
    ],
    credits: {
      enabled: false,
    },
    exporting: {
      enabled: true,
    },
  });
}

// ============================================
// Load products by roast level data
// ============================================
function loadProductsByRoast() {
  fetch("api/products_roast.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        createRoastChart(data.data);
      } else {
        console.error("Error loading products by roast:", data.error);
      }
    })
    .catch((error) => {
      console.error("Error in products by roast request:", error);
      showError("chart-tostado", "Error loading data");
    });
}

// Create pie chart (quesitos) - Products by roast level
function createRoastChart(data) {
  const chartData = data.map((item) => ({
    name: item.tostado,
    y: item.cantidad,
    precio_promedio: item.precio_promedio,
  }));

  chartTostado = Highcharts.chart("chart-tostado", {
    chart: {
      type: "pie",
      backgroundColor: "transparent",
    },
    title: {
      text: "",
    },
    tooltip: {
      pointFormat:
        "<b>{point.name}</b><br/>" +
        "Products: <b>{point.y}</b><br/>" +
        "Average price: <b>{point.precio_promedio} €</b>",
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: "pointer",
        dataLabels: {
          enabled: true,
          format: "<b>{point.name}</b>: {point.percentage:.1f} %",
          style: {
            color:
              (Highcharts.theme && Highcharts.theme.contrastTextColor) ||
              "black",
          },
        },
        colors: ["#6F4E37", "#C9A961", "#8B4513", "#A0522D"],
      },
    },
    series: [
      {
        name: "Products",
        colorByPoint: true,
        data: chartData.map((item) => ({
          name: item.name,
          y: item.y,
          precio_promedio: item.precio_promedio,
        })),
      },
    ],
    credits: {
      enabled: false,
    },
    exporting: {
      enabled: true,
    },
  });
}

// ============================================
// Load products by price data
// ============================================
function loadProductsByPrice() {
  fetch("api/products_price.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        createPriceChart(data.data);
      } else {
        console.error("Error loading products by price:", data.error);
      }
    })
    .catch((error) => {
      console.error("Error in products by price request:", error);
      showError("chart-precio", "Error loading data");
    });
}

// Create bar chart - Top 10 products by price
function createPriceChart(data) {
  const names = data.map((item) => item.nombre);
  const prices = data.map((item) => item.precio);

  chartPrecio = Highcharts.chart("chart-precio", {
    chart: {
      type: "bar",
      backgroundColor: "transparent",
    },
    title: {
      text: "",
    },
    xAxis: {
      categories: names,
      title: {
        text: null,
      },
      labels: {
        style: {
          fontSize: "11px",
        },
      },
    },
    yAxis: {
      min: 0,
      title: {
        text: "Price (€)",
      },
      labels: {
        format: "{value} €",
      },
    },
    tooltip: {
      pointFormat: "<b>{point.y} €</b><br/>Stock: <b>{point.stock}</b> units",
      formatter: function () {
        const item = data.find((d) => d.nombre === this.point.category);
        return (
          `<b>${this.point.category}</b><br/>` +
          `Price: <b>${this.point.y} €</b><br/>` +
          `Stock: <b>${item ? item.stock : 0}</b> units`
        );
      },
    },
    plotOptions: {
      bar: {
        dataLabels: {
          enabled: true,
          format: "{y} €",
        },
        color: "#C9A961",
      },
    },
    series: [
      {
        name: "Price",
        data: prices.map((price, index) => ({
          y: price,
          stock: data[index].stock,
        })),
      },
    ],
    credits: {
      enabled: false,
    },
    exporting: {
      enabled: true,
    },
  });
}

// ============================================
// Update quick statistics
// ============================================
function updateStatistics(data) {
  document.getElementById("total-productos").textContent = data.total || 0;

  // Calculate average price and total stock
  fetch("api/products_price.php")
    .then((response) => response.json())
    .then((priceData) => {
      if (priceData.success && priceData.data.length > 0) {
        const prices = priceData.data.map((p) => p.precio);
        const stocks = priceData.data.map((p) => p.stock);
        const averagePrice = prices.reduce((a, b) => a + b, 0) / prices.length;
        const totalStock = stocks.reduce((a, b) => a + b, 0);

        document.getElementById("precio-promedio").textContent =
          formatCurrency(averagePrice);
        document.getElementById("stock-total").textContent = totalStock;
      }
    })
    .catch((error) => {
      console.error("Error calculating statistics:", error);
    });
}

// ============================================
// Utilities
// ============================================
function formatCurrency(value) {
  return new Intl.NumberFormat("en-US", {
    style: "currency",
    currency: "EUR",
    minimumFractionDigits: 2,
  }).format(value);
}

function showError(containerId, message) {
  const container = document.getElementById(containerId);
  if (container) {
    container.innerHTML = `
            <div class="empty-state">
                <p>⚠️ ${message}</p>
            </div>
        `;
  }
}
