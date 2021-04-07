<?php
class AlmacenUbicacion extends BaseModel {
	protected $table='almacenes_ubicaciones';
	public $timestamps = true;

	public function Estanteria()
	{
		return $this->belongsTo('AlmacenEstanteria','estanteria_id');
	}
}
