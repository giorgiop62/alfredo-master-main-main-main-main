@extends('layouts.app')

@section('title')
    | Modifica post: {{ $post->title }}
@endsection

@section('content')
    <div class="container">

        <h1 class="my-5"> Modifica post: {{ $post->title }} </h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="mb-3" action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Luogo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ old('title', $post->title) }}" placeholder="Luogo">
                @error('title')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Data</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                    value="{{ old('date', $post->date) }}">
                @error('date')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-3">
                <label for="text" class="form-label">Descrizione</label>
                <textarea name="text" id="text" rows="3">{{ old('text', $post->text) }}</textarea>
                @error('text')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-success">Invio</button>
        </form>

        @include('admin.partials.form-delete', [
            'route' => 'posts',
            'message' => "Confermi l'eliminazione del post: $post->title",
            'entity' => $post,
        ])

    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#text'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
            })
            .catch(error => {
                console.error(error);
            });

        function showImage(event) {
            const tagImage = document.getElementById('output-image');
            tagImage.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
