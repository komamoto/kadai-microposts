@if (Auth::user()->is_favorite($micropost->id))
    {{-- お気に入りボタンを外す --}}
    {!! Form::open(['route'=>['favorites.unfavorite',$micropost->id],'method'=>'delete']) !!}
        {!! Form::submit('favorite',['class'=>"btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {{--お気に入りボタンフオーム--}}
    {!! Form ::open(['route'=>['favorites.favorite',$micropost->id]]) !!}
        {!! Form::submit('Unfavorite',['class'=>"btn btn-primary btn-block"]) !!}
    {!! Form ::close() !!}
@endif
