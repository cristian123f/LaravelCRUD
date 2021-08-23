    <label for="Titulo">{{'Titulo'}}</label>
    <input type="text" name="Titulo" id="Titulo" value="{{ isset($fav->Titulo)?$fav->Titulo:''}}">
    <br/>
    <label for="Tema">{{'Tema'}}</label>
    <input type="text" name="Tema" id="Tema" value="{{isset($fav->Tema)?$fav->Tema:''}}">
    <br/>  
    <label for="URL">{{'URL'}}</label>
    <input type="URL" name="URL" id="URL" value="{{isset($fav->URL)?$fav->URL:''}}">
    <br/>
    <input type="submit" name="Guardar Datos">

    <a href="{{ url('fav/')}}">Regresar</a>