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
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($adopcion->Nombre)?$adopcion->Nombre:'' }}" id="Nombre">
    <br>
    <label for="Fecha">Fecha</label>
    <input type="date" class="form-control" name="Fecha" value="{{ isset($adopcion->Fecha)?$adopcion->Fecha:'' }}" id="Fecha">
    <br>
    <br>
    <input type="submit" class="form-control btn btn-success" value="Guardar datos">
    <a href="{{ url('adopcion/') }}" class="form-control btn btn-warning">Regresar</a>  
    
    <br>

    </div>
    </div>
    <div class="col-sm">
      placeholder
    </div>
  </div>
</div>