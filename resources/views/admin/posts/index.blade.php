@extends('layouts.app')

@section('title')
    | Admin
@endsection

@section('content')
    <div class="container">

        <h1 class="my-5">Elenco di post</h1>

        @if (session('deleted'))
            <div class="alert alert-success" role="alert">
                {{ session('deleted') }}
            </div>
        @endif



        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"> <a href="{{ route('admin.posts.orderby', ['id', $direction]) }}">ID</a> </th>
                        <th scope="col"><a href="{{ route('admin.posts.orderby', ['title', $direction]) }}">Luogo</a></th>
                        <th scope="col">Descrizione</th>
                        <th scope="col"><a href="{{ route('admin.posts.orderby', ['date', $direction]) }}">Data</a></th>
                        <th scope="col">azioni</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }} <span class="badge text-bg-info">{{ $post->category?->name }}</span>
                            </td>
                            <td>
                                {{ $post->text }}
                            </td>
                            <td>{{ date_format(date_create($post->date), 'd/m/Y') }}</td>
                            <td class="d-flex">
                                <a class="btn btn-warning  d-inline-block me-2 "
                                    href="{{ route('admin.posts.edit', $post) }}">EDIT</a>

                                @include('admin.partials.form-delete', [
                                    'route' => 'posts',
                                    'message' => "Confermi l'eliminazione del post: $post->title",
                                    'entity' => $post,
                                ])

                            </td>
                        </tr>
                    @empty

                        <tr>
                            <td colspan="4">
                                <h3>Nessun risultato trovato</h3>
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>

        <div>
            {{ $posts->links() }}
        </div>


    </div>
@endsection
