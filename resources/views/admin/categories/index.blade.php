@extends("layouts.master")

@section("content")
    <div class="card mb-3 align-content-center">

        <div class="card-header">
            @if(session()->has("message"))
                <div><span class="alert alert-success">{{ session()->get("message") }}</span></div>
            @endif</div>
        <div class="row">
            <div class="col-md-5">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputfile">Title</label>
                        <input type="text" name="category" class="form-control" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-alt-primary">Submit</button>
                    </div>
                </form>
            </div>
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
                            @foreach($categories as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->name }}</td>
                                    <td>{{ $cat->created_at->diffforHumans() }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-secondary" href="{{ route('categories.edit', $cat->id) }}">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form method="post" action="{{ route('categories.destroy', $cat->id) }}">
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
        </div>

        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
@endsection