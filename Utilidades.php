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
?>