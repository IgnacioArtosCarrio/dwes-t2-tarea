<?php
namespace Clases;

class TriangleGenerator {
    public static function generateTriangle(int $altura): string {
        if ($altura < 0) return "";

        $output = "<pre style='font-family: monospace; white-space: pre;'>\n";

        $maxWidth = ($altura * 2) - 1;

        for ($i = 0; $i < $altura; $i++) {
            $estrellas = str_repeat("*", ($i * 2) + 1);
            $totalEspacios = $maxWidth - strlen($estrellas);
            $espaciosIzquierda = intdiv($totalEspacios, 2);
            $espaciosDerecha = $totalEspacios - $espaciosIzquierda;

            $output .= str_repeat(" ", $espaciosIzquierda) . $estrellas . str_repeat(" ", $espaciosDerecha) . "\n";
        }

        $output .= "</pre>";
        return $output;
    }
}
