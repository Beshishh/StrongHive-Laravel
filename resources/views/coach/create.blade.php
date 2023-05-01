@extends('layouts.app')

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Add Coach</h4>
                <a href = "coachlist" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Back to list<a>
              <div class="card-body">
              </div>
              @include('common.errors')
                <form action="{{ url('addcoach') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Firstname:</strong>
            <input type="text" name="firstname" class="form-control">
        </div>
    </div>			
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Lastname:</strong>
            <input type="text" name="lastname" class="form-control">
        </div>
    </div>				
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="height:50px" name="description"
                placeholder="Description"></textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <input type="file" class="form-control" name="image" value="" >
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-plus"></i> Add Coach
            </button>
        </div>
    </div>
</form>
</div>
</div>


@endsection