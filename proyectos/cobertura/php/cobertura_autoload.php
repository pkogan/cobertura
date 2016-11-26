<?php
/**
 * Esta clase fue y será generada automáticamente. NO EDITAR A MANO.
 * @ignore
 */
class cobertura_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { 
			 require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); 
		}
	}

	static protected $clases = array(
		'cobertura_comando' => 'extension_toba/cobertura_comando.php',
		'cobertura_modelo' => 'extension_toba/cobertura_modelo.php',
		'cobertura_ci' => 'extension_toba/componentes/cobertura_ci.php',
		'cobertura_cn' => 'extension_toba/componentes/cobertura_cn.php',
		'cobertura_datos_relacion' => 'extension_toba/componentes/cobertura_datos_relacion.php',
		'cobertura_datos_tabla' => 'extension_toba/componentes/cobertura_datos_tabla.php',
		'cobertura_ei_arbol' => 'extension_toba/componentes/cobertura_ei_arbol.php',
		'cobertura_ei_archivos' => 'extension_toba/componentes/cobertura_ei_archivos.php',
		'cobertura_ei_calendario' => 'extension_toba/componentes/cobertura_ei_calendario.php',
		'cobertura_ei_codigo' => 'extension_toba/componentes/cobertura_ei_codigo.php',
		'cobertura_ei_cuadro' => 'extension_toba/componentes/cobertura_ei_cuadro.php',
		'cobertura_ei_esquema' => 'extension_toba/componentes/cobertura_ei_esquema.php',
		'cobertura_ei_filtro' => 'extension_toba/componentes/cobertura_ei_filtro.php',
		'cobertura_ei_firma' => 'extension_toba/componentes/cobertura_ei_firma.php',
		'cobertura_ei_formulario' => 'extension_toba/componentes/cobertura_ei_formulario.php',
		'cobertura_ei_formulario_ml' => 'extension_toba/componentes/cobertura_ei_formulario_ml.php',
		'cobertura_ei_grafico' => 'extension_toba/componentes/cobertura_ei_grafico.php',
		'cobertura_ei_mapa' => 'extension_toba/componentes/cobertura_ei_mapa.php',
		'cobertura_servicio_web' => 'extension_toba/componentes/cobertura_servicio_web.php',
	);
}
?>