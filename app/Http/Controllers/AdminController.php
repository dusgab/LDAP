<?php

namespace LDAP\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\User;
use LDAP\Ciudad;
use LDAP\Provincia;
use LDAP\Despachante;
use LDAP\Representante;
use Illuminate\Support\Facades\Auth;
use LDAP\Producto;
use \Chumper\Zipper\Zipper;

class AdminController extends Controller
{
    
    public function index(){
    	return view('/admin/principal');
    }

    public function listarOperadores(){
    	$users = User::where('id', '!=', Auth::id())->orderBy('apellido', 'ASC')->get();        
        $despachantes = Despachante::All();

    	return view('/admin/operadores', array('users' => $users, 'despachantes' => $despachantes));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function activar($id)
    {
        $user = User::FindOrFail($id);
        $user->activo = 1;
        $user->save();
        return redirect('admin/operadores');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function desactivar($id)
    {
        $user = User::FindOrFail($id);
        $user->activo = 0;
        $user->save();
        return redirect('admin/operadores');

    }

    public function reasignar(Request $request)
    {
        $id = $request->id;
        $user = User::FindOrFail($id);
        $user->id_des = $request->id_des;
        $user->save();
        return redirect('admin/operadores');
    }

    public function representantes() {
        $representantes = Representante::orderBy('apellido', 'ASC')->get();
        return view('admin/representantes', array('representantes' => $representantes));
    }

    public function productos(){
    	
        $productos = Producto::orderBy('descripcion', 'ASC')->get();
    	return view('admin/productos', array('productos' => $productos));
    }

    public function operaciones(){
    	
    	return view('admin/operaciones');
    }

    public function nuevoOperador() {
        return view('admin/nuevoOperador');
    }

    public function enviarMail() {
       $this->call('GET','email/nuevoOperador');
        return View('email/nuevoOperador');
    }
    
}
