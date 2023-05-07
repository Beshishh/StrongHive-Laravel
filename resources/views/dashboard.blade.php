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
                </div>
              </div>
                </div>
                </div>
                <h4 class="card-title"> Welcome to Admin panel</h4>
              <div class="card-body">
              </div>
                <div class="table-responsive">
                <div>
                @can ('isAdmin')
                <h4> You are logged in as an Admin</h4>
                </div>
                <div>
                @elsecan ('isManager')
                <h4> You are logged in as an Manager</h4>
                </div>
                <div>
                @elsecan ('isClient')
                <h4> You are logged in as an Client</h4>
                </div>
                <div>
                @else
                <h4> You are not logged in</h4>
                </div>
                @endcan
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
@endsection