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
    
    <label for="Especie">Especie</label>
    <input type="text" class="form-control" name="animal_id" value="{{ isset($adopcion->animal_id)?$adopcion->animal_id:'' }}" id="animal_id">
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