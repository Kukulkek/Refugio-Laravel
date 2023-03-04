<div class="container">
  <div class="row">
    <div class="col-sm">
            
    <div class="form-group">

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach( $errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
   
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($usuario->Nombre)?$usuario->Nombre:'' }}" id="Nombre">
    <br>
    <label for="Segnombre">Segundo Nombre</label>
    <input type="text" class="form-control" name="Segnombre" value="{{ isset($usuario->Segnombre)?$usuario->Segnombre:'' }}" id="Segnombre">
    <br>
    <label for="Apellidop">Apellido Paterno</label>
    <input type="text" class="form-control" name="Apellidop" value="{{ isset($usuario->Apellidop)?$usuario->Apellidop:'' }}" id="Apellidop">
    <br>
    <label for="Apellidom">Apellido Materno</label>
    <input type="text" class="form-control" name="Apellidom" value="{{ isset($usuario->Apellidom)?$usuario->Apellidom:'' }}" id="Apellidom">
    <br>
    <label for="email">Correo Electronico</label>
    <input type="text" class="form-control" name="email" value="{{ isset($usuario->email)?$usuario->email:'' }}" id="email">
    <br>
    <label for="email">Número de Telefono</label>
    <input type="text" class="form-control" name="Telefono" value="{{ isset($usuario->Telefono)?$usuario->Telefono:'' }}" id="Telefono">
    <br>
    <label for="Rol">Rol</label>
    <input type="text" class="form-control" name="Rol" value="{{ isset($usuario->Rol)?$usuario->Rol:'' }}" id="Rol">
    <br>
    <br>
    <input type="submit" class="form-control btn btn-success" value="Guardar datos">
    <a href="{{ url('animal/') }}" class="form-control btn btn-warning">Regresar</a>  
    
    <br>

    </div>
    </div>
    <div class="col-sm">
      placeholder
    </div>
  </div>
</div>