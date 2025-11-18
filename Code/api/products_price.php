<?php
require_once 'config.php';
setJsonHeaders();

try {
    $conn = getDBConnection();

    // Get products ordered by price
    $query = "SELECT 
                nombre,
                precio,
                stock,
                categoria
              FROM productos
              ORDER BY precio DESC
              LIMIT 10";

    $result = $conn->query($query);

    $productos = [];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $productos[] = [
                'nombre' => $row['nombre'],
                'precio' => floatval($row['precio']),
                'stock' => intval($row['stock']),
                'categoria' => $row['categoria']
            ];
        }
    }

    echo json_encode([
        'success' => true,
        'data' => $productos
    ], JSON_NUMERIC_CHECK);

    $conn->close();
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}

