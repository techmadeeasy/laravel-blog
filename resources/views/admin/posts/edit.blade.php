@extends("layouts.master");

@section("content")


    <div class="container">
        <h1>Update Post</h1>
        <div class="row" style="padding: 20px;">
            <div class="col-md-6">
                <form action="{{ route('posts.update', $post->id) }}"  method="post" enctype="multipart/form-data">
                    @method("put")
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $post->title }}" >
                    </div>
                    <div class="form-group">
                        <label for="Category">Category</label>
                        <select name="category" class="form-control" id="role">

                            @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Body">Body</label>
                        <textarea type="text" name="body" class="form-control">{{ $post->body }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="Image">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                    </div>
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    @endif
                </form>
            </div>
        </div>
    </div>

@endsection

