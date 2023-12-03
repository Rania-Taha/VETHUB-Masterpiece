@extends('admin.layouts.master')


@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                    <h3 class="page-title">Clinics</h3>

                </div>
                <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; ">

                    <a href="{{ url('clinic/create') }}" class="btn btn-md" title="Add New Service"
                        style="background-color: #7d7d7d; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                        + Add New Clinic
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
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Description</th>
                                            <th>About</th>
                                            <th>Location_map</th>
                                            <th >Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle; font-size:16px">
                                        @foreach($clinic as $item)
                                        <tr>
                                            <td class="sorting_1">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm me-3" style="margin-right: 7px">
                                                        <img src="{{ asset($item->image) }}" alt="Avatar"
                                                            class="rounded-circle" >
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <span>{{ $item->name }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                           
                                            <td>{{ $item->location }}</td>
                                            <td>{{ Illuminate\Support\Str::limit($item->description, 15) }}</td>

                                                <td>{{ Illuminate\Support\Str::limit($item->about, 15) }}</td>

                                                 <td>{{ Illuminate\Support\Str::limit($item->location_map, 15) }}</td>
                                            </td>
 
                                            <td >
                                                <div class="actions">
                                                  
                                                    <a class="btn btn-md bg-success-light" href="{{ route('clinic.edit', ['clinic' => $item->id]) }}">Edit</a>

                                                    <form method="POST"
                                                    action="{{ url('/clinic' . '/' . $item->id) }}"
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
