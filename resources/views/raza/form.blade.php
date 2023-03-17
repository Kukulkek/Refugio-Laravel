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
    
    <label for="Raza">Raza</label>
    <input type="text" class="form-control" name="Raza" value="{{ isset($raza->Raza)?$raza->Raza:'' }}" id="Raza">
    <br>
    <br>
    <input type="submit" class="btn btn-success" value="Guardar datos">
    <a href="{{ url('raza/') }}" class="btn btn-warning">Regresar</a>  
    
    <br>

    </div>
    </div>
    <div class="col-sm">
      placeholder
    </div>
  </div>
</div>