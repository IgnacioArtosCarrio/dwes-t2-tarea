<?php
namespace Clases;

class TriangleGenerator {
    public static function generateTriangle(int $altura): string {
        if ($altura < 0) return "";


        $output = "<pre style='font-family: monospace; text-align: center; white-space: pre;'>\n";

        for ($i = 0; $i < $altura; $i++) {
            $espacios = str_repeat(" ", $altura - $i - 1);
            $estrellas = str_repeat("*", $i * 2 + 1);
            $output .= "$espacios$estrellas\n";
        }

        $output .= "</pre>";
        return $output;
    }
}
