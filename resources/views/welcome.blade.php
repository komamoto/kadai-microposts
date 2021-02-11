@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Microposts</h1>
            
            {{ -- ユーザ登録ページのリンク--}}
            { !! link_to_route('singup.get','sing up now!',[],['class='btn btn-lg btn-primary']) !! }
        </div>
    </div>
@endsection
