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
                </div>
              </div>
                </div>
                </div>
                <h4 class="card-title"> Schedule table</h4>
              <div class="card-body">
              </div>
                <div class="table-responsive">
                @if (count ($schedule ?? '') > 0)
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Opens
                      </th>
                      <th>
                        Closes
                      </th>
                      <th>
                        Actions
                      </th>
                    </thead>
                    <tbody>
                    @foreach ($schedule as $schedule)
                      <tr>
                        <td>
                          {{ $schedule->name }}
                        </td>
                        <td>
                          {{ $schedule->open }}
                        </td>
                        <td>
                          {{ $schedule->close }}
                        </td>
                        <td>
                          <form action="{{ url('scheduletable/' . $schedule->id) }}" method="POST">
                            <a href="{{url('editschedule/' .$schedule->id)}}" title="edit"><i class="fa fa-btn fa-edit"></i></a>
                            {{ csrf_field() }}
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