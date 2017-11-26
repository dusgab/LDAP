<?php

namespace LDAP;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
	protected $fillable = [
        'id', 'nombre', 'codigopostal',
    ];
    
    public function user()
    {
        return $this->hasMany('LDAP\User', 'id', 'id_provincia');
    }

    public function ciudad()
    {
        return $this->hasMany('LDAP\Ciudad', 'id', 'id_provincia');
    }
}
