<?php

namespace LDAP;

use Illuminate\Database\Eloquent\Model;

class Despachante extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'telefono', 'email',
    ];

    public function user()
    {
        return $this->belongsTo('LDAP\User', 'id_desp');
    }
}
