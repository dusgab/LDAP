<?php

namespace LDAP;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $table = 'productos';

    protected $fillable = [
        'nombre', 'descripcion',
    ];

    public function oferta()
    {
        return $this->belongsTo('LDAP\Oferta', 'id_prod');
    }

    public function demanda()
    {
        return $this->belongsTo('LDAP\Demanda', 'id_prod');
    }
}
