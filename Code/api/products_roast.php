<?php
require_once 'config.php';
setJsonHeaders();

try {
    $conn = getDBConnection();

    // Get products grouped by roast level
    $query = "SELECT 
                tostado,
                COUNT(*) as cantidad,
                AVG(precio) as precio_promedio
              FROM productos
              GROUP BY tostado
              ORDER BY cantidad DESC";

    $result = $conn->query($query);

    $productos = [];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $productos[] = [
                'tostado' => $row['tostado'],
                'cantidad' => intval($row['cantidad']),
                'precio_promedio' => round(floatval($row['precio_promedio']), 2)
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

