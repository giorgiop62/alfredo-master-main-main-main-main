@extends('layouts.app')

@section('title')
    | Admin
@endsection

@section('content')
<div class="container">
    <h1 class="my-5">Benvenuto Alfredo</h1>
    <h3>Sono presenti {{$count_post}} post</h3>
    <p>
        Qui puoi aggiungere un nuovo post, modificarlo o eliminarlo
    </p>
    <a class="btn btn-success" href="{{route('admin.posts.create')}}">Crea un nuovo post</a>

</div>
@endsection


