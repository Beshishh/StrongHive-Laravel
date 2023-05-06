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
                        <input type="search" class="form-control" placeholder="Find orders by id here"  name="search"value="{{ request('search') }}">
                      </div>
                      <div class = "col-sm-2">
                        <a href="{{url('/orders')}}" title="orders"><i class="btn btn-primary">Clear search</i></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                </div>
                </div>
                <h4 class="card-title"> Orders Table</h4>
                <a href = "addorder" class ="btn btn-primary btn-sm btn-flat">
                <i class="fa fa-plus"></i>New<a>
              <div class="card-body">
              </div>
                <div class="table-responsive">
                @if (count ($orders ?? '') > 0)
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        NN
                      </th>
                      <th>
                        Client name
                      </th>
                      <th>
                        Client email
                      </th>
                      <th>
                        Subscription
                      </th>
                      <th>
                        Subscription start
                      </th>
                      <th>
                        Subscription end
                      </th>
                      <th>
                        Actions
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($orders as $orders)
                      <tr>
                        <td>
                          {{ $orders->id }}
                        </td>
                        <td>
                          {{ $orders->clientName }}
                        </td>
                        <td>
                          {{ $orders->email }}
                        </td>
                        <td>
                          {{ $orders->orderedSub }}
                        </td>
                        <td>
                          {{ $orders->created_at }}
                        </td>
                        <td>
                          {{ $orders->subEnd}}
                        </td>
                        <td>
                          <form action="{{ url('orders/' . $orders->id) }}" method="POST">
                            <a href="{{url('detailorder/' .$orders->id)}}" title="detail"><i class="fa fa-btn fa-eye"></i></a>
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