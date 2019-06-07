@extends("layouts.master")

@section("content")
  <div class="card mb-3 align-content-center">

                  <div class="card-header">
                      @if(session()->has("message"))
                          <div><span class="alert alert-success">{{ session()->get("message") }}</span></div>
                      @endif</div>
                  <div class="card-body">
                      <div class="table-responsive">

                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>image</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Role</th>
                                  <th>Active</th>
                                  <th>Created_at</th>
                                  <th>action</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($users as $user)
                              <tr>
                                  <td>{{ $user->id }}</td>
                                  <td>
                                      <img src="{{ $user->photos ? asset($user->photos->name) : "No photo found" }}" width="150"> </td>
                                  <td><a class="" href="{{ route('users.edit', $user->id) }}">{{ $user->name }}</a></td>
                                  <td>{{ $user->email }}</td>
                                  <td>{{ $user->roles ? $user->roles->name : "No role set" }}</td>
                                  <td>@if($user->is_active==0)
                                          Active
                                          @else
                                            Not Active
                                          @endif </td>
                                  <td>{{ $user->created_at->diffforHumans() }}</td>
                                  <td>
                                      <div class="btn-group">

                                          <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                              @method("DELETE")
                                              {{ csrf_field() }}
                                              <button type="submit" class="btn btn-sm btn-secondary js-tooltip-enabled" data-toggle="tooltip" title="" data-original-title="Edit">
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
                  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
              </div>
@endsection