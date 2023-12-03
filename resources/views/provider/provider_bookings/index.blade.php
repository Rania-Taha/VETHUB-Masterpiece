@extends('provider.layouts.master')


@section('content')
    <!-- Page Wrapper -->

    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                        <h3 class="page-title">Bookings</h3>

                    </div>
               
                </div>
            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-hover table-center mb-0">
                                    <thead style="text-align: center; vertical-align: middle;">

                                        <tr style="text-align: left; vertical-align: middle;">
                                            <th>User Name</th>
                                            <th>Booking date & Time</th>
                                            {{-- <th>Schedule id</th> --}}
                                            <th >Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">
                                        @foreach ($book as $item)
                                            <tr style="text-align: left; vertical-align: middle;">

                                                <td style="text-align: left; vertical-align: middle;">
                                                {{ $item->user->first_name }} {{ $item->user->last_name }}
                                                </td>
                                                <td style="text-align: left; vertical-align: middle;">  <li>Date : {{ $item-> date }} </li><br> <li>Time :{{ $item-> time }}</li></td>
                             
                                                <td style="text-align: left; vertical-align: middle;">
                                                    <div class="actions">

                                                        <form method="POST"
                                                        action="{{ url('/book' . '/' . $item->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-md bg-danger-light"
                                                            title="Delete Working Hours"
                                                            onclick="return confirm('Confirm delete?')"> Delete</button>
                                                    </form>


                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
@endsection
