@extends('layouts.app')

@section('content')

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> {{$gallery->name}}</h4>
    <img src="{{ asset('assets/img/gallery/' .$gallery->image) }}" class="card-thumbnail" alt="{{ $gallery->image }}" width="600" height="320">
          <p class="items-text">Created: {{ $gallery->created_at }}</p>
          <p class="items-text">Updated: {{ $gallery->updated_at }}</p>
          <p><a href="{{ url('/gallerylist') }}" class="btn btn-primary" role="button">Назад</a></p>
    </div>
</div>
</div>
</div>
</div>
</div>



@endsection