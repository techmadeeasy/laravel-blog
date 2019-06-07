@extends("layouts.master");

@section("content")


    <div class="container">
        <h1>Edit users</h1>
        @if(session()->has("message"))
            <div class="mt-20 mb-50"><span class="alert alert-success">{{ session()->get("message") }}</span></div>
        @endif
        <div class="row" style="padding: 20px;">
            <div class="col-md-3">
                <img src="/{{ $user->photos->name }}" alt="profile pic" class="img-avatar">
            </div>
            <div class="col-md-6">
                <form action="{{ route('users.update', [$user->id]) }}"  method="POST" enctype="multipart/form-data">
                    @method("PATCH")
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName">Email address</label>
                        <input type="email" class="form-control" value="{{ $user->email }}" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        @if($errors->get("email"))
                            @foreach ($errors as $error)
                                {{ $error->get("email") }}
                            @endforeach
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                        <select name="role" class="form-control" id="role">
                            <option value="0">Active</option>
                            <option value="1">UnActive</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Role</label>
                        <select name="is_active" class="form-control" id="list">
                            <option value="{{ $user->roles ? $user->roles->id : "" }}"> </option>
                            @foreach($role as $r)
                                @if($user->roles)
                                @if($r->name!=$user->roles->name)
                                    <option value="{{ $r->id }}"> {{ $r->name }}</option>
                                @endif
                                    @else
                                    <option value="{{ $r->id }}"> {{ $r->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputfile">Password</label>
                        <input type="file" name="image" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

@endsection