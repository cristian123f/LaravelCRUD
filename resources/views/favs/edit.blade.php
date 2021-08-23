<form method="post" action="{{url('/fav/'.$fav->id)}}">
@csrf
{{method_filed('PATCH')}}
 @include(favs.form)   
</form>

