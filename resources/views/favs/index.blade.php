<a href="{{ url('fav/create')}}">Registrar nuevo favorito</a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Tema</th>
            <th>URL</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($favs as $fa)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $fa->Titulo}}</td>
            <td>{{ $fa->Tema}}</td>
            <td>{{ $fa->URL}}</td>
            <td>
            
            <a href="{{url('/fav/''.$fa->id.'/edit' )}}"></a>
            Editar |
            
            <form action="{{url('/fav/''.$fa->id )}}" method:"post"/>
            @csrf
            {{  method_filed('DELETE')}}      
            <input onclick="return confirm('Quieres Borarr?'')" type="submit" name="">

             Borrar</td>
        </tr>
    @endforecah
    </tbody>
</table>
