<h1>{{$modo}} empleado</h1>

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
<ul>
    @foreach($errors->all() as $error)
       <li> {{$error}} </li>
    @endforeach
    </ul>
</div>
@endif

<div class="form-group">
<label for="Nombre">Nombre </label>
<input type="text"  class="form-control" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}" placeholder="Escriba su nombre">
</div>


<div class="form-group">
<label for="ApellidoPaterno">Apellido Paterno </label>
<input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" placeholder="Escriba su apellido paterno">
</div>


<div class="form-group">
<label for="ApellidoMaterno">Apellido Materno </label>
<input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" placeholder="Escriba su apellido materno">
</div>


<div class="form-group">
<label for="Correo">Correo </label>
<input type="text" class="form-control"  name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}" placeholder="Escriba correo electrónico">
</div>


<div class="form-group">
<label for="Foto"></label>
@if(isset($empleado->Foto))
<img src="{{asset('storage').'/'.$empleado->Foto}}" width="150"  alt="" class="img-thumbnail img-fluid">
@endif
<input type="file" class="form-control" name="Foto" id="Foto" value="">
</div>



<input type="submit" value="{{$modo}} datos" class="btn btn-success"><br>
<a href="{{url('empleado/')}}" class="btn btn-primary">Regresar</a>
