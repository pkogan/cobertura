<?php
class dt_tipo extends cobertura_datos_tabla
{
	function get_descripciones()
	{
		$sql = "SELECT id_tipo, nombre FROM tipo ORDER BY nombre";
		return toba::db('cobertura')->consultar($sql);
	}


}
?>