Seccion para crear favoritos

<form method="post" action="{{ url('/fav')}}" enctype="multipart/form-data">
{{ csrf_field() }}
@include(favs.form)
</form>