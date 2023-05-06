@extends('layouts.app')

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="container">
                <div class="form-group">
              <div class="row align-items-end">
                <div class= "col">
                  <form>
                    <div class="row align-items-center ">
                      <div class = "col">
                        <input type="search" class="form-control" placeholder="Find users here"  name="search"value="{{ request('search') }}">
                      </div>
                      <div class = "col-sm-2">
                        <a href="{{url('/userslist')}}" title="users"><i class="btn btn-primary">Clear search</i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                </div>
                </div>
                <h4 class="card-title"> Users List</h4>
                <a href = "adduser" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-plus"></i>New<a>
              <div class="card-body">
              </div>
                <div class="table-responsive">
                @if (count ($users ?? '') > 0)
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        NN
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Role
                      </th>
                      <th>
                        Actions
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($users as $users)
                      <tr>
                        <td>
                          {{ $users->id }}
                        </td>
                        <td>
                          {{ $users->name }}
                        </td>
                        <td>
                          {{ $users->email }}
                        </td>
                        <td>
                          {{ $users->role }}
                        </td>
                        <td>
                          <form action="{{ url('userslist/' . $users->id) }}" method="POST">
                            <a href="{{url('edituser/' .$users->id)}}" title="edit"><i class="fa fa-btn fa-edit"></i></a>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button onclick="return confirm('Are you sure')" type="submit" class="btn btn-link">
                            <i class ="fa fa-btn fa-trash"></i></button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @else
                    <p>Data not found</p>
                    @endif
                </div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
@endsection