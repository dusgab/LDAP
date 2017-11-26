<?php

namespace LDAP;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    protected $table = 'operaciones';

    protected $fillable = [
        'id_oferta', 'cantidad', 'fecha', 'precio', 'pago', 'destino', 'modo',
    ];

    public function oferta()
    {
        return $this->hasOne('LDAP\Oferta', 'id', 'id_oferta');
    }

}
