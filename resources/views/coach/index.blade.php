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
                        <input type="search" class="form-control" name="search"value="{{ request('search') }}">
                      </div>
                      <div class = "col-sm-2">
                        <a href="{{url('/coachlist')}}" title="coach"><i class="btn btn-primary">Clear search</i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                </div>
                </div>
                <h4 class="card-title"> Coaches Table</h4>
                <a href = "addcoach" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-plus"></i>New<a>
              <div class="card-body">
              </div>
                <div class="table-responsive">
                @if (count ($coach ?? '') > 0)
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        NN
                      </th>
                      <th>
                        Firstname and lastname
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Actions
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($coach as $coach)
                      <tr>
                        <td>
                          {{ $coach->id }}
                        </td>
                        <td>
                          {{ $coach->firstname }}  {{ $coach->lastname }} 
                        </td>
                        <td>
                          {{ \Illuminate\Support\Str::limit($coach->description, 30) }}
                        </td>
                        <td>
                          <form action="{{ url('coachlist/' . $coach->id) }}" method="POST">
                            <a href="{{url('detailcoach/' .$coach->id)}}" title="detail"><i class="fa fa-btn fa-eye" style='padding-right: 9px;'></i></a>
                            <a href="{{url('editcoach/' .$coach->id)}}" title="edit"><i class="fa fa-btn fa-edit"></i></a>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button onclick="return confirm('Are you sure')" type="submit" class="btn btn-link">
                            <i class ="fa fa-btn fa-trash"></i></button>
                        </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
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