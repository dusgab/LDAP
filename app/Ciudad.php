<?php

namespace LDAP;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [
        'id', 'id_provincia', 'nombre', 'codigopostal',
    ];

    public static function getCiudades($id) {
    	return Ciudad::where('id_provincia', '=', $id)->orderBy('nombre', 'ASC')->distinct()->get();
    	
    }

    public function user()
    {
        return $this->hasMany('LDAP\User', 'id', 'id_ciudad');
    }

    public function provincia()
    {
        return $this->belongsTo('LDAP\Provincia', 'id');
    }
}
