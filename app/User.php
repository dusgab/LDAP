<?php

namespace LDAP;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use LDAP\Notifications\MyResetPassword;
use Adldap\Laravel\Traits\AdldapUserModelTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'dni', 'apellido', 'domicilio', 'telefono', 'id_ciudad', 'id_provincia', 'id_des', 'id_rep', 'activo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MyResetPassword($token));
    }

    public function oferta()
    {
        return $this->hasMany('LDAP\Oferta', 'id', 'id_op');
    }

    public function demanda()
    {
        return $this->hasMany('LDAP\Demanda', 'id', 'id_op');
    }

    public function despachante()
    {
        return $this->hasOne('LDAP\Despachante', 'id', 'id_des');
    }

    public function representante()
    {
        return $this->hasOne('LDAP\Representante', 'id', 'id_rep');
    }

    public function provincia()
    {
        return $this->belongsTo('LDAP\Provincia', 'id_provincia');
    }

    public function ciudad()
    {
        return $this->belongsTo('LDAP\Ciudad', 'id_ciudad');
    }

    public function contraoferta()
    {
        return $this->hasMany('LDAP\Contraoferta', 'id', 'id_comprador');
    }
}
