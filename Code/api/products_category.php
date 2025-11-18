<?php
require_once 'config.php';
setJsonHeaders();

try {
    $conn = getDBConnection();

    // Get products grouped by category
    $query = "SELECT 
                categoria,
                COUNT(*) as cantidad,
                SUM(precio) as precio_total,
                AVG(precio) as precio_promedio
              FROM productos
              GROUP BY categoria
              ORDER BY cantidad DESC";

    $result = $conn->query($query);

    $productos = [];
    $total = 0;

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cantidad = intval($row['cantidad']);
            $total += $cantidad;

            $productos[] = [
                'categoria' => $row['categoria'],
                'cantidad' => $cantidad,
                'precio_total' => floatval($row['precio_total']),
                'precio_promedio' => round(floatval($row['precio_promedio']), 2)
            ];
        }
    }

    // Calculate percentages
    foreach ($productos as &$producto) {
        $producto['porcentaje'] = $total > 0
            ? round(($producto['cantidad'] / $total) * 100, 2)
            : 0;
    }

    echo json_encode([
        'success' => true,
        'data' => $productos,
        'total' => $total
    ], JSON_NUMERIC_CHECK);

    $conn->close();
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}

