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
    <input type="text" class="form-control" name="Especie" value="{{ isset($especie->Especie)?$especie->Especie:'' }}" id="Especie">
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Guardar datos">
    <a href="{{ url('especie/') }}" class="btn btn-warning">Regresar</a>  
    
    <br>

    </div>
    </div>
    <div class="col-sm">
      placeholder
    </div>
  </div>
</div>