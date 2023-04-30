@extends('layouts.app')

@section('content')

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> {{$news->title}}</h4>
    <img src="{{ asset('assets/img/blog/' .$news->image) }}" class="card-thumbnail" alt="{{ $news->image }}" width="600" height="320">
          <p>Description: {{$news->description}} </p>
          <p class="items-text">Created: {{ $news->created_at }}</p>
          <p class="items-text">Updated: {{ $news->updated_at }}</p>
          <p><a href="{{ url('/newslist') }}" class="btn btn-primary" role="button">Назад</a></p>
    </div>
</div>
</div>
</div>
</div>
</div>



@endsection