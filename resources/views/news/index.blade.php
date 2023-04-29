@extends('layouts.app')

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> News Table</h4>
                <a href = "addnews" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-plus"></i>New<a>
              <div class="card-body">
              </div>
                <div class="table-responsive">
                @if (count ($news ?? '') > 0)
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        NN
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Created
                      </th>
                      <th>
                        Updated
                      </th>
                      <th>
                        Actions
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($news as $news)
                      <tr>
                        <td>
                          {{ $news->id }}
                        </td>
                        <td>
                          {{ $news->title }}
                        </td>
                        <td>
                          {{ \Illuminate\Support\Str::limit($news->description, 30) }}
                        </td>
                        <td>
                          {{ $news->created_at }}
                        </td>
                        <td>
                          {{ $news->updated_at }}
                        </td>
                        <td>
                          <form action="{{ url('newslist/' . $news->id) }}" method="POST">
                            <a href="{{url('editnews/' .$news->id)}}" title="edit"><i class="fa fa-btn fa-edit"></i></a>
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