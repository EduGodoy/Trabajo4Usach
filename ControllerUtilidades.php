<?php

class ControladorUtilidades
{
    private $conexion;

    /**
     * Constructor que recibe una conexión de base de datos.
     *
     * @param mysqli $conexion
     */
    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    /**
     * Sanea un texto para prevenir inyecciones de código y SQL.
     *
     * @param string $texto
     * @return string
     */
    public function sanearTextoCompleto($texto)
    {
        $textoSaneado = Utilidades::sanearTexto($texto);
        return Utilidades::sanearSQL($textoSaneado, $this->conexion);
    }

    /**
     * Filtra un array para eliminar valores vacíos.
     *
     * @param array $array
     * @return array
     */
    public function filtrarArray($array)
    {
        return Utilidades::filtrarArray($array);
    }

    /**
     * Ordena un array en orden ascendente.
     *
     * @param array $array
     * @return array
     */
    public function ordenarArrayAscendente($array)
    {
        return Utilidades::ordenarArrayAscendente($array);
    }

    /**
     * Ordena un array en orden descendente.
     *
     * @param array $array
     * @return array
     */
    public function ordenarArrayDescendente($array)
    {
        return Utilidades::ordenarArrayDescendente($array);
    }

    /**
     * Fusiona dos arrays y elimina valores duplicados.
     *
     * @param array $array1
     * @param array $array2
     * @return array
     */
    public function fusionarYFiltrarArrays($array1, $array2)
    {
        return Utilidades::fusionarArrays($array1, $array2);
    }
}


// Ejemplo de uso del controlador
$texto = "Ejemplo de texto con <b>HTML</b> y 'comillas'";
echo $controlador->sanearTextoCompleto($texto);

$array = [0, '', 'texto', null, '0', false, true];
print_r($controlador->filtrarArray($array));

$arrayDesordenado = [5, 3, 9, 1];
print_r($controlador->ordenarArrayAscendente($arrayDesordenado));
print_r($controlador->ordenarArrayDescendente($arrayDesordenado));

$array1 = [1, 2, 3];
$array2 = [3, 4, 5];
print_r($controlador->fusionarYFiltrarArrays($array1, $array2));
