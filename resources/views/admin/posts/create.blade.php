@extends("layouts.master");

@section("content")


    <div class="container">
        <h1>Create Post</h1>
        <div class="row" style="padding: 20px;">
            <div class="col-md-6">
                <form action="{{ route('posts.store') }}"  method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control" name="title" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <select name="category" class="form-control" id="role">
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputfile">Body</label>
                        <textarea type="text" name="body" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputfile">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
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

