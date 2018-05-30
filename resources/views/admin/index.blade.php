@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        
		<table class="table">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nombre</th>
					<th scope="col">Tipo</th>
					<th scope="col">Estado Asig.</th>
					<th scope="col">Imagen</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>CelularVentas</td>
					<td>TeléfonoMovil</td>
					<td>Libre</td>
					<td>Imagen</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Portatil548</td>
					<td>ComputadorPortatil</td>
					<td>Asignado</td>
					<td>Imagen1</td>
				</tr>
			
			</tbody>
		</table>

    </div>





</div>
@endsection
