<?php
class dt_localidad extends cobertura_datos_tabla
{
	function get_descripciones()
	{
		$sql = "SELECT id_localidad, localidad FROM localidad ORDER BY localidad";
		return toba::db('cobertura')->consultar($sql);
	}


}
?>