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
                      <div class = "col-sm-2">
                        <a href="{{url('/subscriptionslist')}}" title="subscriptions"><i class="btn btn-primary">Clear search</i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                </div>
                </div>
                <h4 class="card-title"> Subscriptions Table</h4>
                <a href = "addsubscriptions" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-plus"></i>New<a>
              <div class="card-body">
              </div>
                <div class="table-responsive">
                @if (count ($subscription ?? '') > 0)
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        NN
                      </th>
                      <th>
                        Name
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
                    @foreach ($subscription as $subscription)
                      <tr>
                        <td>
                          {{ $subscription->id }}
                        </td>
                        <td>
                          {{ $subscription->title }}
                        </td>
                        <td>
                          {{ $subscription->price }}
                        </td>
                        <td>
                          {{ $subscription->days }}
                        </td>
                        <td>
                          <form action="{{ url('subscriptionslist/' . $subscription->id) }}" method="POST">
                            <a href="{{url('editsubscriptions/' .$subscription->id)}}" title="edit"><i class="fa fa-btn fa-edit"></i></a>
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