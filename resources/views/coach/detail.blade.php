@extends('layouts.app')

@section('content')

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> {{$coach->firstname}}  {{$coach->lastname}}</h4>
    <img src="{{ asset('assets/img/coaches/' .$coach->image) }}" class="card-thumbnail" alt="{{ $coach->image }}" width="600" height="320">
          <p class="items-text">Description: {{ $coach->description}}</p>
          <p class="items-text">Created: {{ $coach->created_at }}</p>
          <p class="items-text">Updated: {{ $coach->updated_at }}</p>
          <p><a href="{{ url('/coachlist') }}" class="btn btn-primary" role="button">Back to list</a></p>
    </div>
</div>
</div>
</div>
</div>
</div>



@endsection