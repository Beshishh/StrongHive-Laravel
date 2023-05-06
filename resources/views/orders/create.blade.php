@extends('layouts.app')

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Create Order</h4>
                <a href = "orders" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-backward"></i>Back to list<a>
              <div class="card-body">
              </div>
              @include('common.errors')
                <form action="{{ url('addorder') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Orderd sub:</strong>
            <input type="text" name="orderedSub" class="form-control" placeholder=" ">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Client Name:</strong>
            <input type="text" name="clientName" class="form-control" placeholder=" ">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Client address:</strong>
            <input type="text" name="address" class="form-control" placeholder=" ">
        </div>
    </div>						
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Client phone:</strong>
            <input type="text" name="phone" class="form-control" placeholder=" ">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Client email:</strong>
            <input type="text" name="email" class="form-control" placeholder=" ">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Price:</strong>
            <input type="text" name="totalPrice" class="form-control" placeholder=" ">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Sub end</strong>
            <input type="date" name="subEnd" class="form-control" placeholder=" ">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-btn fa-plus"></i> Add Sub
            </button>
        </div>
    </div>
</form>
</div>
</div>


@endsection