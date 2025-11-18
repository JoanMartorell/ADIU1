<?php
require_once __DIR__ . '/../api/config.php';

// Verify it's a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../add_product.php');
    exit;
}

// Get and clean form data
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$origen = isset($_POST['origen']) ? trim($_POST['origen']) : '';
$precio = isset($_POST['precio']) ? floatval($_POST['precio']) : 0;
$stock = isset($_POST['stock']) ? intval($_POST['stock']) : 0;
$categoria = isset($_POST['categoria']) ? trim($_POST['categoria']) : '';
$tipo = isset($_POST['tipo']) ? trim($_POST['tipo']) : '';
$tostado = isset($_POST['tostado']) ? trim($_POST['tostado']) : '';
$descripcion = isset($_POST['descripcion']) ? trim($_POST['descripcion']) : '';
$imagen = isset($_POST['imagen']) && !empty(trim($_POST['imagen']))
    ? trim($_POST['imagen'])
    : 'imagenes/cafe1.png';

// Validate required fields
$errores = [];

if (empty($nombre)) {
    $errores[] = 'Name is required';
}

if (empty($origen)) {
    $errores[] = 'Origin is required';
}

if ($precio <= 0) {
    $errores[] = 'Price must be greater than 0';
}

if ($stock < 0) {
    $errores[] = 'Stock cannot be negative';
}

if (empty($categoria)) {
    $errores[] = 'Category is required';
}

if (empty($tipo)) {
    $errores[] = 'Type is required';
}

if (empty($tostado)) {
    $errores[] = 'Roast level is required';
}

if (empty($descripcion)) {
    $errores[] = 'Description is required';
}

// If there are errors, redirect back
if (!empty($errores)) {
    header('Location: ../add_product.php?error=1&msg=' . urlencode(implode(', ', $errores)));
    exit;
}

try {
    $conn = getDBConnection();

    // Prepare SQL query
    $stmt = $conn->prepare("INSERT INTO productos (nombre, origen, precio, stock, categoria, tipo, tostado, descripcion, imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$stmt) {
        throw new Exception("Error preparing query: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ssdisssss", $nombre, $origen, $precio, $stock, $categoria, $tipo, $tostado, $descripcion, $imagen);

    // Execute query
    if ($stmt->execute()) {
        // Product saved successfully
        header('Location: ../add_product.php?success=1');
    } else {
        throw new Exception("Error saving product: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    // Error saving
    header('Location: ../add_product.php?error=1&msg=' . urlencode($e->getMessage()));
    exit;
}

