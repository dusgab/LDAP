<center>
<div class="content" style="width:100%;height:20%;background-color:#7fb850;padding:15px; ">
<center><h2 style="color:#74787e;">{{ config('app.name') }}</h2></center></div>
<br>
<h3>Bienvenido! Usted se ha registrado en LDAP WEB</h3>
<br>
<p style="color:gray;">Su cuenta esta pendiente de activación.</p>
<br>
<p style="color:gray;">Un Adminsitrador verificará sus datos para poder activar su cuenta y poder realizar operaciones.</p>
<br>
<?php $direccion = 'http://localhost:8000/'; ?>
<p><a type="button" href="{{$direccion}}">Ir al Sitio LDAP WEB</a></p>
<br>
<div class="content" style="width:100%;height:20%;background-color:#7fb850;padding:15px; ">
<center><h4 style="color:#74787e;">&copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.</h4></center></div>
</center>