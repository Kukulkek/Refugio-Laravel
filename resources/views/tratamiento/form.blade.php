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
    <input type="text" class="form-control" name="animal_id" value="{{ isset($tratamiento->animal_id)?$tratamiento->animal_id:'' }}" id="animal_id">
    <br>
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($tratamiento->Nombre)?$Tratamiento->Nombre:'' }}" id="Nombre">
    <br>
    <label for="Fecha">Fecha</label>
    <input type="date" class="form-control" name="Fecha" value="{{ isset($tratamiento->Fecha)?$tratamiento->Fecha:'' }}" id="Fecha">
    <br>
    <label for="Veterinario">Veterinario</label>
    <input type="text" class="form-control" name="Veterinario" value="{{ isset($tratamiento->Veterinario)?$tratamiento->Veterinario:'' }}" id="Veterinario">
    <br>
    <br>
    <input type="submit" class="form-control btn btn-success" value="Guardar datos">
    <a href="{{ url('tratamiento/') }}" class="form-control btn btn-warning">Regresar</a>  
    
    <br>

    </div>