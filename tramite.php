<?php

include_once 'conexion.php';

class Tramite extends DB{

    // SE MANDAN UNA QUERY A LA BASE DE DATOS
    function obtenerTramite(){
        $query = $this->connect()->query('SELECT * FROM tramites');
    
        return $query;
    }

    function obtenerDocumentos(){
        $query = $this->connect()->query('SELECT * FROM documentos');
    
        return $query;
    }

    function obtenerTiposTramites(){
        $query = $this->connect()->query('SELECT * FROM tipodocumento');
    
        return $query;
    }
}

?>