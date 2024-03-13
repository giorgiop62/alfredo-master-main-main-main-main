@extends('layouts.app')

@section('title')
    | Nuovo post
@endsection

@section('content')


    <div class="container">

        <h1 class="my-5"> Nuovo post </h1>

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Luogo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ old('title') }}" placeholder="Luogo">
                @error('title')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Data</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                    value="{{ old('date', date('Y-m-d')) }}">
                @error('date')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror

            </div>


            <div class="mb-3">
                <label for="text" class="form-label">Descrizione</label>
                <textarea name="text" id="text" rows="10">{{ old('text') }}</textarea>
                @error('text')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>


            <button type="submit" class="btn btn-success">Invio</button>
        </form>

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
