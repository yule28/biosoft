<?php
class CursosController extends BaseController{
    
    public function uml (){
        
        return View::make('cursos.curso1');
        
    }
    
    public function metodosAgiles (){
        
        return View::make('cursos.curso2');
        
    }
    
    public function modeladoNegocios (){
        
        return View::make('cursos.curso3');
        
    }
    
    public function ingRequisitos (){
        
        return View::make('cursos.curso4');
        
    }
    
    public function arqSoftware (){
        
        return View::make('cursos.curso5');
        
    }
    
    public function analDisSoft (){
        
        return View::make('cursos.curso6');
        
    }
    
    public function disenoSoft (){
        
        return View::make('cursos.curso7');
        
    }
    
    public function pruebSoft (){
        
        return View::make('cursos.curso8');
        
    }
    
    public function gestProy (){
        
        return View::make('cursos.curso9');
        
    }
    
    public function gestRiesgo (){
        
        return View::make('cursos.curso10');
        
    }
    
    public function arqEmpres (){
        
        return View::make('cursos.curso11');
        
    }
    
    public function tallModArq (){
        
        return View::make('cursos.curso12');
        
    }
    
    public function fundGestProc (){
        
        return View::make('cursos.curso13');
        
    }
    
    public function tallModBpmn (){
        
        return View::make('cursos.curso14');
        
    }
}
?>