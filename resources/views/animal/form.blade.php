    <label for="Especie">Especie</label>
    <input type="text" name="Especie" value="{{ isset($animal->Especie)?$animal->Especie:'' }}" id="Especie">
    <br>
    <label for="Raza">Raza</label>
    <input type="text" name="Raza" value="{{ isset($animal->Raza)?$animal->Raza:'' }}" id="Raza">
    <br>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ isset($animal->Nombre)?$animal->Nombre:'' }}" id="Nombre">
    <br>
    <label for="Sexo">Sexo</label>
    <input type="text" name="Sexo" value="{{ isset($animal->Sexo)?$animal->Sexo:'' }}" id="Sexo">
    <br>
    <label for="Foto">Foto</label>
    @if(isset($animal->Foto))
    <img src="{{ asset('storage').'/'.$animal->Foto }}" alt="">
    @endif
    <input type="file" name="Foto" value="" id="Foto">
    <br>
    <input type="submit" value="Guardar datos">
    <a href="{{ url('animal/') }}">Regresar</a>  
    <br>