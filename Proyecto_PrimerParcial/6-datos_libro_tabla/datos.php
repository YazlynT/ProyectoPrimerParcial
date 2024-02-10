<?php
header('Content-Type: application/json');

// Simulación de datos que podrían venir de una base de datos
$data = [
    ["nombre" => "Ana", "edad" => 28, "ciudad" => "Madrid"],
    ["nombre" => "Juan", "edad" => 35, "ciudad" => "Barcelona"],
    ["nombre" => "Sofía", "edad" => 24, "ciudad" => "Valencia"]
];

echo json_encode(['data' => $data]);
