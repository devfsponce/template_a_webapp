<?php
class Curso extends Conectar{
    public function get_curso_destacado(){
        $conectar = parent::conexion();
        parent::set_names();
        
        $sql = "SELECT * FROM tm_cursos WHERE curso_destacado=1 AND curso_estado=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_curso(){
        $conectar = parent::conexion();
        parent::set_names();
        
        $sql = "SELECT * FROM tm_cursos WHERE curso_destacado=0 AND curso_estado=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_curso_etiqueta($cur_id){
        $conectar = parent::conexion();
        parent::set_names();
        
        $sql = "SELECT * FROM tm_curso_detalle WHERE cur_id=? AND det_estado=1";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $cur_id);
        $sql->execute();
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}