<?php

namespace LDAP\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\Provincia;
use LDAP\Ciudad;

class ProvinciasController extends Controller
{
    
    public function getCiudades(Request $request, $id) {

    	if($request->ajax()) {
    		$ciudades = Ciudad::getCiudades($id);
    		return response()->json($ciudades);
    	}
    }
}
