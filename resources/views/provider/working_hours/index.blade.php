@extends('provider.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top:30px">
                        <h3 class="page-title">Working Hours</h3>
                       
                    </div>
                    <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; " >

                        <a href= "" class="btn btn-success btn-md"
                            title="Add New Service">
                            Add New Working Hours
                        </a>
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

                                        <tr style="text-align: center; vertical-align: middle;">
                                            <th>Day</th>
                                            <th>Starts at</th>
                                            <th>Ends at</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">
                                        @foreach ($working_hours as $item)
                                            <tr>
                                               
                                                <td>{{ $item->day }}</td>
                                                <td>{{ $item->start_at }}</td>
                                                <td>{{ $item->ends_at }}</td>

                                                <td>
                                                    <div class="actions">

                                                        <a class="btn btn-primary "
                                                            href="{{ route('workHours.edit', ['workHour' => $item->id]) }}">Update</a>

                                                        <form method="POST"
                                                            action="{{ url('/workHours' . '/' . $item->id) }}"
                                                            accept-charset="UTF-8" style="display:inline">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-danger "
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