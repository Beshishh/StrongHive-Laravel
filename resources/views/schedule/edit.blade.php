@extends('layouts.app')

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Update Day</h4>
                <a href = "/scheduletable" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Back to list<a>
              <div class="card-body">
              </div>
              @include('common.errors')
                <form action="{{ url('editschedule/' . $schedule->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Opens at:</strong>
            <input type="time" name="open" class="form-control" placeholder="Open time" value = "{{ $schedule->title }}">
        </div>
    </div>		
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Closes at:</strong>
            <input type="time" name="close" class="form-control" placeholder="Close time" value = "{{ $schedule->title }}">
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