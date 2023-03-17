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
    <select name="animal_id" class="form-control" value="{{ isset($tratamiento->animal_id)?$tratamiento->animal_id:'' }}" id="animal_id">
    <option selected>Elija un animal</option>
        @foreach($lista_animals as $item)
        <option value="{{ $item->id }}">{{ $item->Nombre }}</option>
        @endforeach
    </select>
    <br>

    <label for="Procedimiento">Procedimiento</label>
    <select name="procedimiento_id" class="form-control" value="{{ isset($tratamiento->procedimiento_id)?$tratamiento->procedimiento_id:'' }}" id="procedimiento_id">
    <option selected>Elija un procedimiento</option>
        @foreach($lista_procedimientos as $item)
        <option value="{{ $item->id }}">{{ $item->Procedimiento }}</option>
        @endforeach
    </select>
    <br>
    <label for="Fecha">Fecha</label>
    <input type="date" class="form-control" name="Fecha" value="{{ isset($tratamiento->Fecha)?$tratamiento->Fecha:'' }}" id="Fecha">
    <br>
    <label for="Veterinario">Veterinario</label>
    <select name="usuario_id" class="form-control" value="{{ isset($tratamiento->usuario_id)?$tratamiento->usuario_id:'' }}" id="usuario_id">
    <option selected>Elija un veterinario</option>
        @foreach($lista_usuarios as $item)
        <option value="{{ $item->id }}">{{ $item->Nombre }}</option>
        @endforeach
    </select>
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Guardar datos">
    <a href="{{ url('tratamiento/') }}" class="btn btn-warning">Regresar</a>  
    
    <br>

    </div>
    </div>
    <div class="col-sm">
      placeholder
    </div>
  </div>
</div>