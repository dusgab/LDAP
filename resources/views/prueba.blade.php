<center>
<div class="content" style="width:100%;height:20%;background-color:#7fb850;padding:15px; ">
<center><h2 style="color:#74787e;">{{ config('app.name') }}</h2></center></div>
<br>
<h3>Ha recibido una Contra Oferta!</h3>
<h4>@foreach($user as $u)
	{{$u->name}}
	@endforeach</h4>
<br>
<h4 style="color:gray;">Tiene una nueva Contra Oferta en la siguiente publicación:</h4>

<br>
<p><a href="{{ config('app.url') }}" type="button"  style="background-color:#3498db;border-radius:6px;color:white;height: 40px;border-style: hidden;padding: 10px;text-decoration: none" >Ir al Sitio LDAP WEB</a></p>
<br>
<div class="content" style="width:100%;height:20%;background-color:#7fb850;padding:15px; ">
<center><h4 style="color:#74787e;">&copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.</h4></center></div>
</center>
