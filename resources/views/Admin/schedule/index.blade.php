@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                        <h3 class="page-title">Schedule</h3>
                       
                    </div>
                    <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; " >
                        <a href="{{ url('schedule/create') }}" class="btn btn-success btn-md"
                            title="Add New Service">
                            Add New Schedule
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

                                        <tr>
                                            <th>Clinic ID</th>
                                            <th>Time</th>
                                            <th>Status</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">
                                        @foreach ($schedule as $item)
                                            <tr>
                                                <td>{{ $item->clinic_id }}</td>
                                                <td>{{ $item->time }}</td>
                                                <td>{{ $item->status }}</td>
                                                

                                                <td>
                                                    <div class="actions">

                                                        <a class="btn btn-primary "
                                                            href="{{ route('schedule.edit', ['schedule' => $item->id]) }}">Update</a>

                                                        <form method="POST"
                                                            action="{{ url('/schedule' . '/' . $item->id) }}"
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
