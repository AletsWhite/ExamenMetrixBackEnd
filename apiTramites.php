<?php

include_once 'tramite.php';

class ApiTramites{

    // SE TOMAN LOS DATOS DE LA TABLA DE TRAMITES
    function getAllTramites(){
        $tramite = new Tramite();
        $tramites = array();
        $tramites["items"] = array();

        $res = $tramite->obtenerTramite();

        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    'nombre' => $row['Nombre'],
                    'codigo' => $row['Codigo'],
                    'documentos' => $row['Documentos'],
                    'fechaAuditoria' => $row['FechaAuditoria'],
                    'activo' => $row['Activo']
                );
                array_push($tramites['items'], $item);

                echo json_encode($tramites);
            }
        }else{
            echo json_encode(array('mensaje'=>'No hay elementos registrados'));
        }
    }

    // SE TOMAN LOS DATOS DE LA TABLA DOCUMENTOS
    function getAllDocumentos(){
        $documento = new Tramite();
        $documentos = array();
        $documentos["items"] = array();

        $res = $documento->obtenerDocumentos();

        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    'nombre' => $row['Nombre'],
                    'tipoDocumento' => $row['TipoDocumento'],
                    'fechaAuditoria' => $row['FechaAuditoria'],
                    'activo' => $row['Activo']
                );
                array_push($documentos['items'], $item);

                echo json_encode($documentos);
            }
        }else{
            echo json_encode(array('mensaje'=>'No hay elementos registrados'));
        }
    }

    // SE TOMAN LOS DATOS DE LA TABLA TIPO DE DOCUMENTOS
    function getAllTiposDocumentos(){
        $tipo = new Tramite();
        $tipos = array();
        $tipos["items"] = array();

        $res = $tipo->obtenerTiposTramites();

        if($res->rowCount()){
            while($row = $res->fetch(PDO::FETCH_ASSOC)){
                $item = array(
                    'nombre' => $row['Nombre'],
                    'codigo' => $row['Codigo'],
                    'fechaAuditoria' => $row['FechaAuditoria'],
                    'activo' => $row['Activo']
                );
                array_push($tipos['items'], $item);

                echo json_encode($tipos);
            }
        }else{
            echo json_encode(array('mensaje'=>'No hay elementos registrados'));
        }
    }
}

?>