@extends('layouts.app')

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Edit User</h4>
                @if (Auth::user()->role == 'admin')
                <a href = "/userslist" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Back to list<a>
                @endif
              <div class="card-body">
              </div>
              @include('common.errors')
                <form action="{{ url('edituser/' . $users->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" value = "{{ $users->name }}">
        </div>
    </div>						
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            <input type="text" name="password" class="form-control">
        </div>
    </div>	
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password confirmation:</strong>
            <input type="text" name="password_confirmation" class="form-control" >
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            <select class="form-control" name="role" {{ (Auth::user()->role !== 'admin') ? 'disabled' : '' }}>
    @foreach ($role as $role)
        <option value="{{ $role }}" {{ ($role == $users->role) ? 'selected' : '' }}>{{ $role }}</option>
    @endforeach
</select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-plus"></i> Edit
            </button>
        </div>
    </div>
</form>
</div>
</div>


@endsection