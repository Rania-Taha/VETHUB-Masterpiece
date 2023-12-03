@extends('admin.layouts.master')


@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                        <h3 class="page-title">Working Hours</h3>

                    </div>
                    <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; ">

                        <a href="{{ url('workHours/create') }}" class="btn btn-md" title="Add New Service"
                            style="background-color: #7d7d7d; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                            + Add New Working Hours
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

                                        <tr >
                                            <th>Clinic Name</th>
                                            <th>Day & Time</th>
                                            {{-- <th>Starts at</th>
                                            <th>Ends at</th> --}}
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">
                                        @foreach ($working_hours as $item)
                                            <tr style="text-align: center; vertical-align: middle;">
                                                <td>{{ $item->clinic->name }}</td>
                                                <td >
                                                    <div >
                                                       
                                                        <div >
                                                            <span>{{ $item->day }}</span>
                                                            <br>
                                                            <small class="text-truncate"> Starts at : {{ $item->start_at }}</small>
                                                            <br>
                                                            <small class="text-truncate"> Ends at :  {{ $item->ends_at }}</small>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td >
                                                    <div class="actions">

                                                        <a class="btn btn-md bg-success-light" href="{{ route('workHours.edit', ['workHour' => $item->id]) }}">Edit</a>


                                                        <form method="POST"
                                                        action="{{ url('/workHours' . '/' . $item->id) }}"
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
