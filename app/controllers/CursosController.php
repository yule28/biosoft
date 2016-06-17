<?php
class CursosController extends BaseController{
    /*Lenguaje de Modelado de Software: UML 2.5*/
    public function getUml (){
        
        return View::make('cursos.curso1');
        
    }
    /*Desarrollo de Software: Métodos Ágiles y Balanceados (Scrum, XP y Blue WATCH)*/
    public function getMetodosagiles (){
        
        return View::make('cursos.curso2');
        
    }
    /*Modelado de Negocios con UML 2.5 y BPMN 2.0*/
    public function getModeladonegocios (){
        
        return View::make('cursos.curso3');
        
    }
    /*Ingeniería de Requisitos con UML*/
    public function getIngrequisitos (){
        
        return View::make('cursos.curso4');
        
    }
    /*Diseño de Arquitecturas de Software*/
    public function getArqsoftware (){
        
        return View::make('cursos.curso5');
        
    }
    /*Análisis y Diseño de Software Orientado a Objetos*/
    public function getAnaldissoft (){
        
        return View::make('cursos.curso6');
        
    }
    /*Diseño de Software Basado en Servicios (SOA)*/
    public function getDisenosoft (){
        
        return View::make('cursos.curso7');
        
    }
    /*Pruebas de Software: Técnicas y Gestión*/
    public function getPruebsoft (){
        
        return View::make('cursos.curso8');
        
    }
    /*Gestión de Proyectos de Software con PMBOK*/
    public function getGestproy (){
        
        return View::make('cursos.curso9');
        
    }
    /*Gestión de Riesgos, Configuración y Calidad*/
    public function getGestriesgo (){
        
        return View::make('cursos.curso10');
        
    }
    /*Arquitecturas Empresariales con TOGAF 9.1*/
    public function getArqempres (){
        
        return View::make('cursos.curso11');
        
    }
    
    public function getTallaodarq (){
        
        return View::make('cursos.curso12');
        
    }
    /*Fundamentos de Gestión de Procesos de Negocio - BPM*/
    public function getFundgestproc (){
        
        return View::make('cursos.curso13');
        
    }
    /*La Notación de Modelado de Procesos de Negocio - BPMN 2.0*/
    public function getTallmodbpmn (){
        
        return View::make('cursos.curso14');
        
    }
    
    public function getDesoftdd (){
        
        return View::make('cursos.curso15');
        
    }
}
?>