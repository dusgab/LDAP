<?php

namespace LDAP\Http\Controllers;

use Illuminate\Http\Request;
use LDAP\User;
use Auth;
use Session;

class LdapController extends Controller
{
    public function autenticar(Request $request) {

    	$username = $request["username"];
    	$password = $request["password"];

    	$ldap_dnUser = "uid=".$username.",ou=Usuarios,dc=moha,dc=com";
		$ldap_dnAdmin = "uid=".$username.",ou=Admin,dc=moha,dc=com";
		$ldap_password = $password;
	
		$ldap_con = ldap_connect("ldap://localhost:389/");
		
	    ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

		if(@ldap_bind($ldap_con,$ldap_dnAdmin,$ldap_password)){

				$user = User::where('username', '=', $username)->first();
				if (empty($user)) {
					$user = User::where('username', '=', 'admin')->first();
					Auth::login($user);
				}
				Auth::login($user);
	            return redirect('/index');
		} elseif (@ldap_bind($ldap_con,$ldap_dnUser,$ldap_password)) {

	    		$user = User::where('username', '=', $username)->first();
				if (empty($user)) {
					$user = User::where('username', '=', 'invitado')->first();
					Auth::login($user);
				}
				Auth::login($user);
	            return redirect('/index');
	    } else {
	    	Session::flash('login', 'Usuario o Contraseña incorrectos');
			return view('auth.login');

	    }
	}
    	
}
