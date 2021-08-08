<?php
    class Conectar {
        protected $dbh;
    protected function conexion(){
    try{
         $conectar = $this->dbh = new PDO("mysql:host=localhost; dbname=template_a_app", "root", "");
         return $conectar;
    }catch(Exception $e){
        print "Error :". $e->getMessage();
        }
    }
    
    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }
}