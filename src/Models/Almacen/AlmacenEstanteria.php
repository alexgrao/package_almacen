<?php
class AlmacenEstanteria extends BaseModel {
	protected $table='almacenes_estanterias';
	public $timestamps = true;

	public function Zona()
	{
		return $this->belongsTo('AlmacenZona','zona_id');
	}

}
