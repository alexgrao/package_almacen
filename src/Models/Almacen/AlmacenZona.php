<?php
class AlmacenZona extends BaseModel {
	protected $table='almacenes_zonas';
	public $timestamps = true;

	public function Almacen()
	{
		return $this->belongsTo('Almacen','almacen_id');
	}

}
