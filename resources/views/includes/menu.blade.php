
<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">Menu</div>
  <div class="card-body">
  	<div class="list-group">
  	<!-- Helper auth() de laravel para uso de la sesion check retorna TRUE o FALSE segun sea el caso de si la sesion esta iniciada -->
  	@if(auth()->check())
	  <a href="#" class="list-group-item list-group-item-action">
	    Dashboard
	  </a>
	  <a href="#" class="list-group-item list-group-item-action">Ver incidencias
	  </a>
	  <a href="#" class="list-group-item list-group-item-action">Reportar incidencia
	  </a>
	  <a href="#" class="list-group-item list-group-item-action">Administracion
	  </a>
	@else
	  <a href="#" class="list-group-item list-group-item-action">
	    Bienvenido
	  </a>
	  <a href="#" class="list-group-item list-group-item-action">Instrucciones
	  </a>
	  <a href="#" class="list-group-item list-group-item-action">Creditos
	  </a>
	@endif
	</div>
  </div>
</div>