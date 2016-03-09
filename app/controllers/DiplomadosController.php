<?php
class DiplomadosController extends BaseController{
  
    /*-------------- CERTIFICADOS Y DIPLOMADOS ----------------*/
    
    public function certificadoBpm (){
        
        return View::make('diplomados.programa.curso-bpm');
        
    }
    
    public function certificadoIr (){
        
        return View::make('diplomados.programa.curso-ir');
        
    }
    
    public function diplomadoBpmIr (){
        
        return View::make('diplomados.programa.diplomado-bpm-ir');
        
    }
    
    /*-------------- PAGINAS CON CONTENIDO GENERAL PARA LOS DIPLOMADOS Y CERTIFICADOS -----------------*/
    
    public function metodologia (){
        
        return View::make('diplomados.descrip-d1.metodologia');
        
    }
    
    public function certificacion (){
        
        return View::make('diplomados.descrip-d1.certificacion');
        
    }
    
    public function requisitos (){
        
        return View::make('diplomados.descrip-d1.requisitos');
        
    }
    
    public function plan (){
        
        return View::make('diplomados.descrip-d1.plan');
    }
    
    public function contacto (){
        
        return View::make('diplomados.descrip-d1.contacto');
        
    }
}
?>