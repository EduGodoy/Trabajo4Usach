<?php

class ControladorUtilidades
{

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
