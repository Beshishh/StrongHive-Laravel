@extends('layouts.app')

@section('content')
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Subscriptions Table</h4>
                <a href = "addsubcription" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-plus"></i>New<a>
              <div class="card-body">
              </div>
                <div class="table-responsive">
                @if (count ($subscriptions ?? '') > 0)
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
                        Price
                      </th>
                      <th>
                        Days
                      </th>
                      <th>
                        Actions
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($subscriptions as $subscriptions)
                      <tr>
                        <td>
                          {{ $subscriptions->id }}
                        </td>
                        <td>
                          {{ $subscriptions->name }}
                        </td>
                        <td>
                        {{ \Illuminate\Support\Str::limit($subscriptions->description, 30) }}
                        </td>
                        <td>
                          {{ $subscriptions->price }}
                        </td>
                        <td>
                          {{ $subscriptions->days }}
                        </td>
                        <td>
                          <form action="{{ url('subscriptionslist/' . $subscriptions->id) }}" method="POST">
                            <a href="{{url('editsubscription/' .$subscriptions->id)}}" title="edit"><i class="fa fa-btn fa-edit"></i></a>
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