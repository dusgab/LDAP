<?php

namespace LDAP;

use Illuminate\Database\Eloquent\Model;

class Demanda extends Model
{
    protected $fillable = [
        'id_op', 'id_prod', 'cantidad', 'precio', 'pago', 'destino', 'modo',
    ];

    public function user()
    {
        return $this->belongsTo('LDAP\User', 'id_op');
    }

    public function producto()
    {
        return $this->hasOne('LDAP\Producto', 'id', 'id_prod');
    }
}
