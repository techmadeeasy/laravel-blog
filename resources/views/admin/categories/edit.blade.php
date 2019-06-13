@extends("layouts.master");

@section("content")


    <div class="container">
        <h1>Update Categories</h1>
        <div class="row" style="padding: 20px;">
            <div class="col-md-6">
                <form action="{{ route('categories.update', $categories->id) }}"  method="post" enctype="multipart/form-data">
                    @method("put")
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="category" value="{{ $categories->name }}" >
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

