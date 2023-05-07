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
                <h4 class="card-title"> Welcome, {{Auth::user()->name}}</h4>
              <div class="card-body">
              </div>
                <div class="table-responsive">
                
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
@endsection