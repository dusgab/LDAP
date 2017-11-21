<?php

namespace LDAP;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    protected $fillable = [
        'id_op', 'id_prod', 'cantidad', 'precio', 'fechaInicio', 'fechaFin', 'puesto', 'cobro', 'modo', 'abierta',
    ];

    public function user()
    {
        return $this->belongsTo('LDAP\User', 'id_op');
    }

    public function producto()
    {
        return $this->hasOne('LDAP\Producto', 'id', 'id_prod');
    }

    public function operacion()
    {
        return $this->belongsTo('LDAP\Operacion', 'id_oferta');
    }
}
