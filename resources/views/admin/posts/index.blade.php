@extends("layouts.master")

@section("content")
    <div class="card mb-3 align-content-center">

        <div class="card-header">
            @if(session()->has("message"))
                <div><span class="alert alert-success">{{ session()->get("message") }}</span></div>
            @endif</div>
        <div class="col-md-6">
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Created_at</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>
                                    <img src="{{ $post->photo ? asset($post->photo->name) : "No photo found" }}" width="150"> </td>
                                <td><a class="" href="{{ route('posts.edit', $post->id) }}">{{ $post->title }}</a></td>
                                <td>{{ $post->body }}</td>
                                <td>{{ $post->categories ? $post->categories->name : "Uncategorized"}}</td>
                                <td>{{ $post->created_at->diffforHumans() }}</td>
                                <td>
                                    <div class="btn-group">
                                        <form method="post" action="{{ route('posts.destroy', $post->id) }}">
                                            @method("DELETE")
                                            {{ csrf_field() }}
                                            <button class="btn btn-sm btn-secondary js-tooltip-enabled" type="submit" title="" data-original-title="Edit">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
@endsection