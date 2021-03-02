@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- お気に入り一覧 --}}
            @include('microposts.microposts')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            
        </div>
    </div>
@endsection