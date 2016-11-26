<?php

class dependencia extends toba_nodo_basico
{
        protected $imagen;
	protected $imagen_origen;
		
	protected $propiedades = true;
        
        protected $tipo;
		
	function tipo($tipo_dep){
            $this->tipo = $tipo_dep;
            
        }
        
        function set_nombre_largo($nombre){
            $this->nombre_largo = $nombre;
        }
	
	function set_camino($camino)
	{
		
	}
	
        function get_iconos()
	{            
            $iconos = array();
           
            //if(isset($this->tipo)){//si la dependencia tiene tipo
            //    $im = 'img/'.$this->tipo.'.jpeg';
                $iconos[] = array('imagen' => 'img/1.jpeg', 'ayuda' => $this->nombre_corto);
            //}
            return $iconos;
	}
}
?>

