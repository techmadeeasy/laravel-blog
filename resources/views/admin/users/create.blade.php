@extends("layouts.master");

@section("content")


<div class="container">
    <h1>Create users</h1>
    <div class="row" style="padding: 20px;">
        <div class="col-md-6">
        <form action="{{ route('users.store') }}"  method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" requireds>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Role</label>
                <select name="role" class="form-control" id="role">
                    @foreach($all as $al)
                        <option value="{{ $al->id }}">{{ $al->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="is_active" class="form-control" id="list">
                    <option value="0"> Active</option>
                    <option value="1"> Not Active</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputfile">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputfile">Image</label>
                <input type="file" name="image" class="form-control"  placeholder="image">
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

