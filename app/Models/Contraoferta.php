<?php

namespace LDAP;

use Illuminate\Database\Eloquent\Model;

class Contraoferta extends Model
{
    protected $fillable = [
        'id_oferta', 'id_comprador', 'cantidad', 'aceptada',
    ];

    public function oferta()
    {
        return $this->belongsTo('LDAP\Oferta', 'id_oferta');
    }

    public function user()
    {
        return $this->belongsTo('LDAP\User', 'id_comprador');
    }
}
