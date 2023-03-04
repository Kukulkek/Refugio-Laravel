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
    
    <label for="Especie">Especie</label>
    <input type="text" class="form-control" name="Especie" value="{{ isset($animal->Especie)?$animal->Especie:'' }}" id="Especie">
    <br>
    <label for="Raza">Raza</label>
    <input type="text" class="form-control" name="Raza" value="{{ isset($animal->Raza)?$animal->Raza:'' }}" id="Raza">
    <br>
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{ isset($animal->Nombre)?$animal->Nombre:'' }}" id="Nombre">
    <br>
    <label for="Sexo">Sexo</label>
    <input type="text" class="form-control" name="Sexo" value="{{ isset($animal->Sexo)?$animal->Sexo:'' }}" id="Sexo">
    <br>
    <label for="Foto"></label>
    @if(isset($animal->Foto))
    <img src="{{ asset('storage').'/'.$animal->Foto }}" width="100" alt="">
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
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