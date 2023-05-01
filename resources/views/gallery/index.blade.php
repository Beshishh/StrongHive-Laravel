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
                  <form>
                    <div class="row align-items-center ">
                      <div class = "col">
                        <input type="search" class="form-control" placeholder="Find images here"  name="search"value="{{ request('search') }}">
                      </div>
                      <div class = "col-sm-2">
                        <a href="{{url('/gallerylist')}}" title="gallery"><i class="btn btn-primary">Clear search</i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                </div>
                </div>
                <h4 class="card-title">Gallery</h4>
                <a href="addgallery" class="btn btn-primary btn-sm btn-flat">
                    <i class="fa fa-plus"></i>New</a>
                    <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                    @if(count($gallery ?? '') > 0)
                        @foreach($gallery as $item)
                        <div class="col-lg-4 d-inline-block">
                            <div class="card card-chart">
                            <div class="card-header">
                            <h5 class="card-category">{{$item->id}}</h5>
                                <h4 class="card-title">{{$item->name}}</h4>
                                <div class="dropdown">
                                <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                                    <i class="now-ui-icons loader_gear"></i>
                                </button>
                                <form action="{{ url('gallerylist/' . $item->id) }}" method="POST">
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{url('detailgallery/' .$item->id)}}">View</a>
                                    <a class="dropdown-item" href="{{url('editgallery/' .$item->id)}}">Edit</a>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="dropdown-item text-danger" onclick="return confirm('Are you sure')" type="submit">Delete</a>
                                </div>
                                </div>
                            </div>
                            </form>
                            <div class="card-body">
                                <div class="chart-area">
                                <img src="{{ asset('assets/img/gallery/' .$item->image) }}" class="card-img-top" alt="{{ $item->image }}" style="object-fit: cover; width: 100%; height: 250px;">
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                <i class="now-ui-icons arrows-1_refresh-69"></i> Updated: {{$item->updated_at}}
                                </div>
                            </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p>Data not found</p>
                    @endif
                    </div>
                </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
@endsection