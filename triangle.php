<?php
require_once "clases/TriangleGenerator.php";

use Clases\TriangleGenerator;

echo '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generador de Triángulos</title>
    <style>
        body { font-family: monospace; text-align: center; }
    </style>
</head>
<body>';

echo TriangleGenerator::generateTriangle(6);

echo '</body></html>';
