@extends('layouts.app')

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Update Subscription</h4>
                <a href = "/subscriptionslist" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Back to list<a>
              <div class="card-body">
              </div>
              @include('common.errors')
                <form action="{{ url('editsubscription/' . $subscriptions->id) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <input type="text" name="name" class="form-control" placeholder="Subscription Title" value = "{{ $subscriptions->name }}">
        </div>
    </div>					
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="height:50px" name="description"
                placeholder="Description">{{ $subscriptions->description }}</textarea>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong>
            <input type="text" name="price" class="form-control" placeholder="Subscription Price" value = "{{ $subscriptions->price }}">
        </div>
    </div>	
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Days:</strong>
            <input type="text" name="days" class="form-control" placeholder="Subscription Days" value = "{{ $subscriptions->days }}">
        </div>
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