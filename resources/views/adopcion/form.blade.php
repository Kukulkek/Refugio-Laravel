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
    
    <label for="Animal">Animal</label>
    <select name="animal_id" class="form-control" value="{{ isset($adopcion->animal_id)?$adopcion->animal_id:'' }}" id="animal_id">
    <option selected>Elija un animal</option>
        @foreach($lista_animals as $item)
        <option value="{{ $item->id }}">{{ $item->Nombre }}</option>
        @endforeach
    </select>
    <br>
    <label for="Usuario">Usuario</label>
    <select name="usuario_id" class="form-control" value="{{ isset($tratamiento->usuario_id)?$tratamiento->usuario_id:'' }}" id="usuario_id">
    <option selected>Elija un usuario</option>
        @foreach($lista_usuarios as $item)
        <option value="{{ $item->id }}">{{ $item->Nombre }}</option>
        @endforeach
    </select>
    <br>
    <label for="Fecha">Fecha</label>
    <input type="date" class="form-control" name="Fecha" value="{{ isset($adopcion->Fecha)?$adopcion->Fecha:'' }}" id="Fecha">
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Guardar datos">
    <a href="{{ url('adopcion/') }}" class="btn btn-warning">Regresar</a>  
    
    <br>

    </div>
    </div>
    <div class="col-sm">
      placeholder
    </div>
  </div>
</div>