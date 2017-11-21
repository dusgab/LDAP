<?php

namespace LDAP\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\User;
use LDAP\Oferta;
use LDAP\Producto;
use LDAP\Demanda;
use Auth;

class PaginasController extends Controller
{
    public function index () {
		return view('index');
	}

	public function operadores () {
		$admin = User::where('admin', '=', 1)->first();
		$users = User::where('id', '!=', $admin->id)->where(function ($query) {
                $query->where('name', '!=', 'invitado');})->orderBy('apellido', 'ASC')->get();
        return view('operadores', array('users' => $users));
	}

	public function operaciones () {
		return view('operaciones');
	}

	public function demandas () {
		if(Auth::check()) {
		$demandas = Demanda::All();
		if(Auth::user()->activo === 1){
            $activo = 1;
        }else{
            $activo = 0;
        }
		return view('demandas', array('demandas' => $demandas, 'activo' => $activo));
		}else{
			
			return view('demandas');

		}
	}

	public function precios () {
		return view('precios');
	}
}

