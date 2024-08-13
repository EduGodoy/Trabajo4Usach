<?php

class Utilidades {

    /**
     * Sanea un texto para prevenir inyecciones de código.
     *
     * @param string $texto
     * @return string
     */
    public static function sanearTexto($texto) {
        return htmlspecialchars(trim($texto), ENT_QUOTES, 'UTF-8');
    }

    /**
     * Sanea un texto para prevenir inyecciones SQL.
     *
     * @param string $texto
     * @param mysqli $conexion
     * @return string
     */
    public static function sanearSQL($texto, $conexion) {
        return mysqli_real_escape_string($conexion, $texto);
    }

    /**
     * Filtra un array para eliminar valores vacíos.
     *
     * @param array $array
     * @return array
     */
    public static function filtrarArray($array) {
        return array_filter($array, function($valor) {
            return !empty($valor) || $valor === '0';
        });
    }

    /**
     * Ordena un array por valores, de menor a mayor.
     *
     * @param array $array
     * @return array
     */
    public static function ordenarArrayAscendente($array) {
        sort($array);
        return $array;
    }

    /**
     * Ordena un array por valores, de mayor a menor.
     *
     * @param array $array
     * @return array
     */
    public static function ordenarArrayDescendente($array) {
        rsort($array);
        return $array;
    }

    /**
     * Fusiona dos arrays y elimina los valores duplicados.
     *
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public static function fusionarArrays($array1, $array2) {
        return array_unique(array_merge($array1, $array2));
    }
}

// Ejemplo de uso:
$texto = " <script>alert('XSS');</script> ";
$textoSaneado = Utilidades::sanearTexto($texto);
echo "Texto saneado: " . $textoSaneado . "\n";

// Supongamos que tienes una conexión a la base de datos:
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'base_de_datos');

$textoSQL = "SELECT * FROM users WHERE id = 1";
$textoSQLSaneado = Utilidades::sanearSQL($textoSQL, $conexion);
echo "Texto SQL saneado: " . $textoSQLSaneado . "\n";

// Manejo de arrays:
$array = [1, 2, '', 4, '0'];
$arrayFiltrado = Utilidades::filtrarArray($array);
print_r($arrayFiltrado);

$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
$arrayFusionado = Utilidades::fusionarArrays($array1, $array2);
print_r($arrayFusionado);

$arrayDesordenado = [5, 2, 8, 1];
$arrayOrdenadoAsc = Utilidades::ordenarArrayAscendente($arrayDesordenado);
print_r($arrayOrdenadoAsc);

$arrayOrdenadoDesc = Utilidades::ordenarArrayDescendente($arrayDesordenado);
print_r($arrayOrdenadoDesc);
