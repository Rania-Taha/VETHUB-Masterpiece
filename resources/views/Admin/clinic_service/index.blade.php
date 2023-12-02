@extends('admin.layouts.master')


@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-7 col-auto" style="margin-top: 12px ; margin-left: 30px ; ">
                    <h3 class="page-title">Clinic Service</h3>

                </div>
                <div class="col-sm-12 " style="margin-top: 30px ; margin-left: 30px ; ">

                    <a href="{{ url('clinicService/create') }}" class="btn btn-md" title="Add New Service"
                        style="background-color: #7d7d7d; color: #fff; padding: 8px 16px; border-radius: 4px; text-decoration: none;">
                        + Add New Clinic Service
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
                                            <th>Clinic Name</th>
                                            <th>Service</th>
                                            {{-- <th>description</th> --}}
                                            {{-- <th>image</th> --}}
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center; vertical-align: middle;">

                                        @foreach ($clinic_service as $item)
                                            <tr>
                                               
                                                <td>
                                                    @if ($item->clinic)
                                                        {{ $item->clinic->name }}
                                                    @else
                                                        No Clinic Assigned
                                                    @endif
                                                </td>
                                                <td>
                                                   <center> <div >
                                                        <div class="avatar avatar-sm me-3" style="margin-right: 7px">
                                                            <img src="{{ asset($item->image) }}" alt="Avatar"
                                                                class="rounded-circle" >
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <span>{{ $item->service_name }}</span>
                                                            <small class="text-truncate"> <?php
                                                                $description1 = strip_tags($item->description);
                                                                $limit = 50; // Adjust this to your desired character limit
                                                                
                                                                if (strlen($description1) > $limit) {
                                                                    $shortDescription = substr($description1, 0, $limit) . '...';
                                                                } else {
                                                                    $shortDescription = $description1;
                                                                }
                                                                ?>
                                                                {{ $shortDescription }}</small>
                                                        </div>
                                                    </div> </center>
                                                </td>
                                                {{-- <td>{{ $item->service_name }}</td> --}}
                                                {{-- <td>
                                                    <?php
                                                    $description1 = strip_tags($item->description);
                                                    $limit = 30; // Adjust this to your desired character limit
                                                    
                                                    if (strlen($description1) > $limit) {
                                                        $shortDescription = substr($description1, 0, $limit) . '...';
                                                    } else {
                                                        $shortDescription = $description1;
                                                    }
                                                    ?>
                                                    {{ $shortDescription }}
                                                </td>

                                                <td>
                                                    <img src="{{ asset($item->image) }}"
                                                        style="height: 100px; width: 100px;">
                                                </td> --}}

                                                <td >
                                                    <div class="actions">

                    

                                                        <a class="btn btn-md bg-success-light" href="{{ route('clinicService.edit', ['clinicService' => $item->id]) }}">Edit</a>


                                                        <form method="POST"
                                                        action="{{ url('/clinicService' . '/' . $item->id) }}"
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
