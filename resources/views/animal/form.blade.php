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
    <select name="especie_id" class="form-control" value="{{ isset($animal->especie_id)?$animal->especie_id:'' }}" id="especie_id">
    <option selected>Elija una especie</option>
        @foreach($lista_especies as $item)
        <option value="{{ $item->id }}">{{ $item->Especie }}</option>
        @endforeach
    </select>
    <br>
    <label for="Raza">Raza</label>
    <select name="raza_id" class="form-control" value="{{ isset($animal->raza_id)?$animal->raza_id:'' }}" id="raza_id">
    <option selected>Elija una raza</option>
        @foreach($lista_razas as $item)
        <option value="{{ $item->id }}">{{ $item->Raza }}</option>
        @endforeach
    </select>
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
    <input type="submit" class="btn btn-success" value="Guardar datos">
    <a href="{{ url('animal/') }}" class="btn btn-warning">Regresar</a>  
    
    <br>

    </div>

    </div>
    <div class="col-sm">
      placeholder
    </div>
  </div>
</div>