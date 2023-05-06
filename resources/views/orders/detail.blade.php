@extends('layouts.app')

@section('content')

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Subscription of {{$orders->clientName}}. Order number : {{$orders->id}}</h4>
          <p>Ordered subscription: {{$orders->orderedSub}} </p>
          <p>Client email: {{$orders->email}} </p>
          <p>Client address: {{$orders->address}} </p>
          <p>Client phone: {{$orders->phone}} </p>
          <svg width="600" height="320">
    {!! file_get_contents(public_path('qr-codes/'.$orders->qr)) !!}
</svg>
          <p class="items-text">Subscription start: {{ $orders->created_at }}</p>
          <p class="items-text">Subscription end: {{ $orders->subEnd }}</p>
          <p><a href="{{ url('/orders') }}" class="btn btn-primary" role="button">Back to list</a></p>
    </div>
</div>
</div>
</div>
</div>
</div>



@endsection