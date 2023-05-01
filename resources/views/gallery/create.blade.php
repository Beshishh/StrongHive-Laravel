@extends('layouts.app')

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Image</h4>
                <a href = "/gallerylist" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Back to list<a>
              <div class="card-body">
              </div>
              @include('common.errors')
                <form action="{{ url('addgallery') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Image Name">
        </div>
    </div>					
    <div class="col-xs-12 col-sm-12 col-md-12">
            <input type="file" class="form-control" name="image" value="" >
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-plus"></i> Add Image
            </button>
        </div>
    </div>
</form>
</div>
</div>


@endsection