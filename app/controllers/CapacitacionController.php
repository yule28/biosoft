<?php

class CapacitacionController extends BaseController{
    
    public function index (){
        
        return View::make('estaticas.capacitacion');
        
    }
/*--------- SECCION DE DIPLOMADO ----------------*/
    public function diplomados(){
        
        return View::make('diplomados.diplomado1');
        
    }
    
    
    /*-------- SECCION CURSOS IN COMPANY -----------*/
    public function cursosInCompany (){
        
        return View::make('cursos.cursos');
        
    }
    
}
?>