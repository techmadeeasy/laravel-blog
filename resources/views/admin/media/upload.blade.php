@extends("layouts.master")

@section("content")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" />
        <h1>Upload</h1>

    <form action="{{ route('media.store') }}" class="dropzone" method="post">
@csrf
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
@endsection